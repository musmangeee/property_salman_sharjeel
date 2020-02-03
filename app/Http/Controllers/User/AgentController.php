<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\PropertyModel;

class AgentController extends Controller
{
    public function viewListing(){

        $totalAgents = User::where('user_type', 2)->paginate(5);
        $totalProperties = PropertyModel::all();
        // dd($totalProperties);
        return view('pages.user.agent.index', compact('totalAgents', 'totalProperties'));
    }

    public function listingDetail($id){

        $user = User::where('id', $id)->first();
        $detail = PropertyModel::where('created_by', $id)->get();
        return view('pages.user.agent.detail', compact('detail', 'user'));
    }
}
