<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PropertyModel;
use App\User;
use Auth;
use Session;
use Image;
use Storage;

class UserManagementController extends Controller
{
    public function allUser(){
        
        $user = User::all();
        return view('pages.admin.user_management.user', compact('user'));
    }

    public function allProperties(){

        $allProperties = PropertyModel::all();
        return view('pages.admin.user_management.all_properties', compact('allProperties'));
    }

    public function InactivateUser(Request $request){
        $data = $request->all();
        User::where('id', $data['user_id'])->update([
            'status' => 0,
        ]);

         Session::flash('success', 'User has been Inactive successfully.');
            //Session::flash('info', 'Tenant will be recieving an email for the account confirmation  ');
            return redirect()->back();
    }

    public function activateUser(Request $request){
        $data = $request->all();
        User::where('id', $data['user_id'])->update([
            'status' => 1,
        ]);

         Session::flash('success', 'User has been activate successfully.');
            //Session::flash('info', 'Tenant will be recieving an email for the account confirmation  ');
            return redirect()->back();
    }

    public function InactivateProperty(Request $request){
        $data = $request->all();
        PropertyModel::where('id', $data['property_id'])->update([
            'status' => 0,
        ]);

         Session::flash('success', 'User has been Inactive successfully.');
            //Session::flash('info', 'Tenant will be recieving an email for the account confirmation  ');
            return redirect()->back();
    }

    public function activateProperty(Request $request){
        $data = $request->all();
        PropertyModel::where('id', $data['property_id'])->update([
            'status' => 1,
        ]);

         Session::flash('success', 'User has been activate successfully.');
            //Session::flash('info', 'Tenant will be recieving an email for the account confirmation  ');
            return redirect()->back();
    }
}
