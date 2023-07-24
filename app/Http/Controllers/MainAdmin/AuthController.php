<?php

namespace App\Http\Controllers\MainAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_view()
    {
        return view('MainAdmin.auth.login');
    }

    public function login(Request $request)
    {
        if (
            $request->email === env('LOGIN_ADMIN') &&
            Hash::check($request->password,env('LOGIN_PASSWORD'))
        ) {
            session()->put('email',$request->email);
            session()->put('password',$request->password);

            return redirect(route('admin.home'));
        } else {
            session()->flash('error', 'Error in Email or Password, Please try again');
            return view('MainAdmin.auth.login');
        }
    }

    public function logout()
    {
        session()->put('email',null);
        session()->put('password',null);
        return redirect('admin/login');
    }
}
