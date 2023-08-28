<?php

namespace App\Http\Controllers;

use App\Events\LoginNotification;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if(!Auth::validate($credentials)):
            return 'Login Failed';
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        Auth::logoutOtherDevices($credentials['password']);
//        event(new LoginNotification('A message'));
        LoginNotification::dispatch('You have been logged out');

        return redirect()->intended();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('viewLogin');
    }

    public function checker(Request $request)
    {
        return Auth::logoutOtherDevices($request->get('password'));
    }

    public function loggedIn(Request $request)
    {
        return view('logged-in');
    }
}
