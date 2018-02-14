<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminLoginController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }*/

    public function showLoginForm(){

        if (Gate::allows('admin-login')) {
            return redirect('/');
        }

        else{
            return view('admin.login');

        }
    }

    public function login(Request $request){
        // Validate Form DATA
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to login
        if (Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->password], $request->remember)){
            // If successful then redirect to intended location
            return redirect()->intended(route('dashboard'));
        }

        // If Unsuccessful then redirect to admin Login Form

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }

        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'email';
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
