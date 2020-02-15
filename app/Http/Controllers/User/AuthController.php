<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\PropertyModel;
use App\User;
use Auth;
use Session;
use Image;
use Storage;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }
    
    public function userDashboard(){

        $activeProperties = PropertyModel::where('status', 1)->where('created_by', Auth::user()->id)->count();
        $inactiveProperties = PropertyModel::where('status', 0)->where('created_by', Auth::user()->id)->count();
        $recentProperty = PropertyModel::where('created_by', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
    

        return view('pages.user.user_dashboard', compact('activeProperties', 'inactiveProperties', 'recentProperty'));
    }

    public function agentDashboard(){

        $agent = User::where('user_type', 2)->where('id', Auth::user()->id)->first();
        $activeProperties = PropertyModel::where('status', 1)->where('created_by', Auth::user()->id)->count();
        $inactiveProperties = PropertyModel::where('status', 0)->where('created_by', Auth::user()->id)->count();
        $recentProperty = PropertyModel::where('created_by', Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
        
        return view('pages.user.agent_dashboard', compact('agent', 'activeProperties', 'inactiveProperties', 'recentProperty'));
    }

    public function userProfile($id){

        $profile = User::findOrFail($id);
        return view('pages.user.profile.user_profile', compact('profile'));
    }

    public function userProfileView($id){

        $profile = User::findOrFail($id);
        return view('pages.user.profile.user_profile_view', compact('profile'));
    }

    public function userProfileUpdate(Request $request, $id){
        // dd($request);
        $user = User::findOrFail($id);
        // $data = $request->all();

        $validator = validator::make($request->all(), [
        'name' => 'required|string|min:3',
        'lname' => 'required|string|min:3',
        'contact_no' => 'required',
        'city' => 'required',
        'b_country' => 'required',
        ]);

            $user->name = $request->name;
            $user->lname = $request->lname;
            $user->contact_no = $request->contact_no;
            $user->user_type = $request->user_type;
            $user->b_address1 = $request->b_address1;
            $user->b_address2 = $request->b_address2;
            $user->b_post_code = $request->b_post_code;
            $user->b_country = $request->b_country;
            $user->title = $request->title;
            $user->gender = $request->gender;
            $user->dob = $request->dob;
            $user->landline_no = $request->landline_no;
            $user->whatsapp_no = $request->whatsapp_no;
            $user->skype_id = $request->skype_id;
            $user->website = $request->website;
            $user->state = $request->state;
            $user->area_town = $request->area_town;
            $user->city = $request->city;
        
        if($validator->passes()){

        $user->save();

        Session::flash('success', 'User profile has been updated successfully.');
        return redirect()->back();
        }
        else{
        Session::flash('error', 'Fields with * must be filled.');
        return redirect()->back()->withInput($request->all());
        }
    }

    public function agentProfile($id){

        $profile = User::findOrFail($id);
        
        return view('pages.user.profile.agent_profile', compact('profile'));
    }

     public function agentProfileView($id){

        $profile = User::findOrFail($id);
        return view('pages.user.profile.agent_profile_view', compact('profile'));
    }

    public function agentProfileUpdate(Request $request, $id){
        // dd($request);
        $user = User::findOrFail($id);
        // $data = $request->all();

        $validator = validator::make($request->all(), [
        'name' => 'required|string|min:3',
        'lname' => 'required|string|min:3',
        'contact_no' => 'required',
        'city' => 'required',
        'b_country' => 'required',
        'b_name' => 'required',
        ]);

            $user->name = $request->name;
            $user->lname = $request->lname;
            $user->b_name = $request->b_name;
            $user->contact_no = $request->contact_no;
            $user->user_type = $request->user_type;
            $user->b_address1 = $request->b_address1;
            $user->b_address2 = $request->b_address2;
            $user->b_post_code = $request->b_post_code;
            $user->b_country = $request->b_country;
            $user->title = $request->title;
            $user->gender = $request->gender;
            $user->dob = $request->dob;
            $user->landline_no = $request->landline_no;
            $user->whatsapp_no = $request->whatsapp_no;
            $user->skype_id = $request->skype_id;
            $user->website = $request->website;
            $user->state = $request->state;
            $user->area_town = $request->area_town;
            $user->city = $request->city;
        
        if($validator->passes()){

        $user->save();

        Session::flash('success', 'User profile has been updated successfully.');
        return redirect()->back();
        }
        else{
        Session::flash('error', 'Fields with * must be filled.');
        return redirect()->back()->withInput($request->all());
        }
    }

}
