<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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

        Session::put('popupPage', 'register');
        Session::save();

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

        Session::put('popupPage', 'credit');
        Session::put('userInfo', [
            'userId' => $user->id,
            'username' => $user->username,
            'password' => $request->password,
            'email' => $user->email
        ]);
        Session::save();

        $apiServices->postToRockPhase($user->email, $request->ip(), $request->trackingId);

        return redirect()->back();
    }
}
