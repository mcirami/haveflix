<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends BaseController
{

    /**
     * Login username to be used by the controller.
     *
     * @var string
     */
    protected $username;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');

        $this->username = $this->findUsername();
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request): JsonResponse
    {
        //$content = $request->getContent();
        $myRequestVars = $request->all();
        $username = $request->user_name;
        $myRequestVars['username'] = $username;

        $validator = Validator::make($myRequestVars, [
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        //return response()->json(['request' => $request->all()]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $myRequestVars;
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('HaveFlix')->plainTextToken;
        $success['username'] =  $input['username'] ;

        return $this->sendResponse($success, 'User registered successfully.');
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request): JsonResponse
    {

        if(Auth::attempt(['username' => $request->user_name, 'email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('HaveFlix')->plainTextToken;
            $success['username'] =  $user->username;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

    /**
     * Update User Status
     *
     * @return \Illuminate\Http\Response
     */
    public function updateUserStatus(Request $request): JsonResponse {

        $userId = $request->userId;
        $status = $request->status;

        if (!isset($request->userId)) {
            return $this->sendResponse("User ID missing:", "user is a required parameter");
        }

        if (!isset($request->status)) {
            return $this->sendResponse("Status missing:", "Status is a required parameter");
        }

        $user = User::where('id', $userId)->first();

        if (!$user) {
            return $this->sendResponse("User not found:", "There is no user with this ID");
        }

        $user->update([
            'status' => $status,
        ]);

        $plaintext = Str::random(32);
        $token = $user->loginTokens()->create([
            'token' => hash('sha256', $plaintext),
            'expires_at' => now()->addMinutes(15),
        ]);

        $loginUrl =  URL::temporarySignedRoute('verify-login', $token->expires_at, [ 'token' => $plaintext]);

        //Cookie::queue(Cookie::forget('popupPage'));
        Log::channel( 'api' )->info("login url: " . $loginUrl);

        return $this->sendResponse("loginUrl", $loginUrl);

        //return $this->sendError($request->all());
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function findUsername()
    {
        $login = request()->input('login');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        request()->merge([$fieldType => $login]);

        return $fieldType;
    }

    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }
}
