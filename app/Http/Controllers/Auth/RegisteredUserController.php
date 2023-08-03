<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Services\ApiServices;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, ApiServices $apiServices)
    {

        //Cookie::queue(Cookie::make('popupPage', 'register', 30, null, null, null, false));
        Session::put('popupPage', 'register');
        Session::save();
        /*$apiErrors = ["status" => 0, "errors" => ["username" => ["That Username Is Not Available"],"email" => ["That Email Is Already In Use"]]];

        session()->put('_old_input', ['username' => $user->username, 'email' => $user->email]);
        return redirect('/')->with(["apiErrors" => $apiErrors['errors']]);*/

        $request->validate([
            'username' => ['required', 'string', 'min:4','max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        //Cookie::queue(Cookie::make('popupPage', 'credit', 30, null, null, null, false));
        Session::put('popupPage', 'credit');
        Session::put('userInfo', [
            'userId' => $user->id,
            'username' => $user->username,
            'password' => $request->password,
            'email' => $user->email
        ]);
        Session::save();
        //Auth::login($user);

        //$apiServices->postToBBR($user);

        return redirect()->back();

        //Cookie::queue(Cookie::forget('popupPage'));

        //return redirect(RouteServiceProvider::HOME);
    }
}
