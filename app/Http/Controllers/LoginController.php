<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\RedirectIfAuthenticated;

class LoginController extends Controller
{
    public function loginIndex()
    {
        return view('login');
    }

    // --------------------- [ User login ]
    public function userlogin(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:6"
        ]);
        $userAuth = $request->only('email', 'password');

        //---------------[ check user ]

        if (Auth::attempt($userAuth)) {
            return redirect()->intended('dashboard');
        }
        else {
            return back()->with('error', 'oops! invalid username or password.');
        }
    }

}
