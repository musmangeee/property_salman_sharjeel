<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PropertyModel;

class PagesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function userIndex()
    {
        $FeaturedProperties = PropertyModel::where('status', 1)->get();
        return view('pages.user.index', compact('FeaturedProperties'));
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
