<?php

namespace App\Http\Controllers;

use App\Admin;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();

        return view('admin/admin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/createAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Form DATA
        $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/administrators/create')
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

            // redirect
            Session::flash('message', 'An Admin Has Been Successfully Created!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/administrators');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);

        return view('admin/editAdmin', compact('admin',$admin));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate Form DATA
        $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect('/admin/administrators/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

        else {
            $admin = Admin::find($id);

            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = bcrypt($request->password);

            $admin->update();

            // redirect
            Session::flash('message', 'An Admin Has Been Successfully Updated!');
            Session::flash('alert-class', 'alert-success');
            return redirect('/admin/administrators');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        // redirect
        Session::flash('message', 'Successfully Deleted An Admin');
        Session::flash('alert-class', 'alert-success');
        return Redirect::to('/admin/administrators');
    }


    // Custom Function To Show Admin Dashboard After Login Authentication

    public function dashboard()
    {
        return view('admin/index');
    }
}
