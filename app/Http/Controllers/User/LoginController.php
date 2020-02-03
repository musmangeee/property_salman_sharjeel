<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Session;
class LoginController extends Controller
{
    public function __construct()
    {

        //$this->middleware('guest', ['except' => ['logout']]);

    }

    public function preLogin()
    {
        return view('pages.user.auth.pre_login');
    }


    public function showLoginForm()
    {

        return view('pages.user.auth.login');
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $status = User::where('email', $request->email)->first();

        if($status->user_type == 1){

            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                Session::flash('success', 'You have successfully logged in to User dashboard.');
                return redirect()->intended(route('user.user_dashboard'));
            } else {
                Session::flash('error', 'Invalid email or password.');
                return redirect()->back()->withInput($request->only('email'));
            }
        }else{
            
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                Session::flash('success', 'You have successfully logged in to User dashboard.');
                return redirect()->intended(route('user.agent_dashboard'));
            } else {
                Session::flash('error', 'Invalid Invalid email or password.');
                return redirect()->back()->withInput($request->only('email'));
            }
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
