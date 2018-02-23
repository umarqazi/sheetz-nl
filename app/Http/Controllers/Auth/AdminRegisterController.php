<?php

namespace App\Http\Controllers\Auth;

use App\Admin;
use App\Notifications\AdminRegisteredNotification;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminRegisterController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('guest:admin');
    }*/

    public function showRegisterForm(){
        return view('admin.register');
    }

    public function register(Request $request){
        // Validate Form DATA
        $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return Redirect::to('/admin/register')
                ->withErrors($validator)
                ->withInput();
        }

        else{
            $admin = new Admin;

            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);

            $admin->save();

            /*Auth::guard('admin')->login($admin);*/

//            Email Notification upon Admin Registration.
            $admin->notify(new AdminRegisteredNotification($admin));

            // redirect
            Session::flash('message', 'Admin Successfully Registered!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/login');
        }
    }
}
