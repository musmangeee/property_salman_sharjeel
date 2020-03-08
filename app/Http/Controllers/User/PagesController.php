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
        $FeaturedProperties = PropertyModel::where('featured_property', 1)->limit(6)->get();
        // dd($FeaturedProperties);
        $RecentProperties = PropertyModel::where('status', 1)->orderBy('created_at', 'desc')->limit(8)->get();
        $sale = PropertyModel::where('listing_type', 1)->count();
        $rent = PropertyModel::where('listing_type', 2)->count();
        return view('pages.user.index', compact('FeaturedProperties', 'RecentProperties', 'sale', 'rent'));
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
