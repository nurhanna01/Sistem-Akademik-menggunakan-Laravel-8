<?php

namespace App\Http\Controllers\AuthStudent;

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
        $this->middleware('guest:student')->except('logout');
    }

    public function showLoginForm(){
        return view('authStudent.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nim', 'password');

        if (Auth::guard('student')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('student');
        }

        return back()->withErrors([
            'nim' => 'The provided credentials do not match our records.',
        ]);
    }


    public function logout()
    {
        Auth::guard('student')->logout();

        return redirect('/student/login');
    }
}
