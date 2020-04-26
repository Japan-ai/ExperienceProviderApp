<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/home';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }
 
    protected function guard()
    {
        return \Auth::guard('admin');
    }
    
    public function logout(Request $request)
    {
        \Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
 
        return redirect('/admin/login');
    }
}
