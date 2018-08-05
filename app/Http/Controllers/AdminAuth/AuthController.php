<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    protected $guard='admin';
    protected function guard()
    {
        return Auth::guard('admin');
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function showLogin()
    {
        if(Auth::guard('admin')->check()){
            return redirect('/dashboard');
        }
        return view("Admin_pages.login");
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
