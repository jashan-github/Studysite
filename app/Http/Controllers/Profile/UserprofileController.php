<?php

namespace App\Http\Controllers\Profile;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserprofileController extends Controller
{
    public function myprofile(){
        $userid= Auth::user()->id;
        $user = User::findOrFail($userid);
        return view('profile.userprofile',[
            'user'=>$user
        ]);
    }

    public function profileupdate(Request $request){
        $userid= Auth::user()->id;
        $user = User::findOrFail($userid);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->city = $request->input('city');
        $user->pincode = $request->input('pincode');

        $user->update();
        return redirect()->back()->with('success','Profile successfully updated');
    }
}
