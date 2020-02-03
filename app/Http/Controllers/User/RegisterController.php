<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Auth;
use Hash;
use Mail;
use Input;
use Session;
use App\User;

class RegisterController extends Controller
{
    public function registerForm(){
        return view('pages.user.auth.register');
    }

    public function registerUser(Request $request){

        // $sid = Auth::guard('procurementofficer')->user()->id;
        $user = new User;
        $data = $request->all();
        $validator = validator::make($request->all(), [
        'name' => 'required|string|min:3',
        'email' => 'required|unique:users,email',
        'password' => 'required|min:6',
        ]);
        // dd($data);

        if($data['user_type'] == 1){
            $user->name = $data['name'];
            $user->lname = $data['lname'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->contact_no = $data['contact_no'];
            $user->user_type = $data['user_type'];
        }else{

            $user->name = $data['name'];
            $user->lname = $data['lname'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            // $user->contact_no = $data['contact_no'];
            $user->user_type = $data['user_type'];
            $user->register_as = $data['register_as'];
            $user->agent_type = $data['agent_type'];
            $user->b_type = $data['b_type'];
            $user->b_contact_no = $data['b_contact_no'];
            $user->b_name = $data['b_name'];
            $user->b_address1 = $data['b_address1'];
            $user->b_address2 = $data['b_address2'];
            $user->b_address3 = $data['b_address3'];
            $user->b_post_code = $data['b_post_code'];
            $user->b_country = $data['b_country'];
        }

        if($validator->passes()){

        $user->save();

        Session::flash('success', 'User has been registered successfully.');
        return redirect()->route('user.user_login');
        }
        else{
        Session::flash('error', 'Fields with * must be filled.');
        return redirect()->back()->withInput($request->only('email'));
        }
    }
}
