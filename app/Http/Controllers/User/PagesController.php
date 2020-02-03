<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function userIndex()
    {
        return view('pages.user.index');
    }


    public function contactUs()
    {
        return view('pages.user.static_pages.contact_us');
    }
    public function aboutUs()
    {
        return view('pages.user.static_pages.about_us');
    }
    public function agentListing()
    {
        return view('pages.user.static_pages.about_us');
    }
}
