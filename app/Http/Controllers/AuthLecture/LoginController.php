<?php

namespace App\Http\Controllers\AuthLecture;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:lecture')->except('logout');
    }

    public function showLoginForm(){
        return view('authLecture.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nip', 'password');

        if (Auth::guard('lecture')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('lecture');
        }

        return back()->withErrors([
            'nip' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout()
    {
        Auth::guard('lecture')->logout();

        return redirect('/lecture/login');
    }
}
