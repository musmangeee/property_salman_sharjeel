<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }
    
    public function userDashboard(){

        return view('pages.user.user_dashboard');
    }

    public function agentDashboard(){

        return view('pages.user.agent_dashboard');
    }
}
