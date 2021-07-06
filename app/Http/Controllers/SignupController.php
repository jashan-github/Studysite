<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use illuminate\Support\Facades\Auth\RegisterUsers;

use App\Http;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller
{
    // user registration view
    public function index()
    {
        return view('signup');
    }
    //--------------------- [ register user]-----------------------------

    public function addData(Request $request){

        // validate form fields
        $request->validate([
            'name'        =>      'required',
            'phone'         =>      'required|max:10|min:10',
            'email'             =>      'required|email',
            'password'          =>      'required|min:6',
            'confirm_password'  =>      'required|same:password'
        ]);


        // if validation success then create an input array
        $inputArray      =           array(
            'name'        =>      $request->name,
            'phone'             =>      $request->phone,
            'name'         =>      $request->name,
            'email'             =>      $request->email,
            'password'          =>      Hash::make($request->password)
        );

        // ----------------register user

             $user = User::create($inputArray);

        // if registration success then return with success message

        if (!is_null($user)) {
            return back()->with('success', 'You have registered successfully.');
        }

        // else return with error message
        else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }
    }

}
