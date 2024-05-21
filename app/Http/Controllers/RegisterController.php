<?php

namespace App\Http\Controllers;

use App\Models\Need;
use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|min:5|unique:users,username',
            'password' => 'required|min:8',
            'cooperative_id' => 'required'
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Email address already used',
            'username.required' => 'Username is required',
            'username.min' => 'At least 5 characters is required for username',
            'username.unique' => 'Username already exists',
            'password.required' => 'Password is required',
            'password.min' => 'Password should be at least 8 character',
            'cooperative_id.required' => 'Cooperative ID is required',
        ]);
        
        if($validator->fails()){
            $message = $validator->messages()->all()[0];
            flash()->addError($message);
            return back()->withInput();

        }else{
            $user_form = [
                'name' => $request->name,
                'cooperative_id' => $request->cooperative_id,
                'email' => $request->email,
                'username' => $request->username,
                'password' => bcrypt($request->password),
                'role' => 'user'
            ];
            User::create($user_form);

            $notification = [
                'cooperative_id' => $request->cooperative_id,
                'title' => 'New User Added',
                'message' => $request->name.' has been Successfully Created and Added.',
            ];
            Notification::create($notification);
            
            flash()->addSuccess('User Successfully Registered');
            return back();
        }
    }
}
