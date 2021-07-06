<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        $userid= Auth::user()->id;
        $user = User::findOrFail($userid);
        return view('profile.changepassword');
    }

// {{-- change password --}}

        public function update(Request $request)
        {
            if(!(Hash::check($request->get('old_password'),Auth::user()->password))){
                return back()->with('error', 'Current password does not match!');
            }
            $request->validate([
                'old_password'=>'required',
                'new_password'=>'required',
            ]);

            $new_password = $request->get('new_password');
            $user = Auth::User();

            $user->password =  Hash::make($new_password);

            $user->save();

            return redirect()->back()->with("success","Password changed successfully !");


        }
    }
