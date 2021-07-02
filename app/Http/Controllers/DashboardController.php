<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    // [ Dashboard section ]
    public function dashboard()
    {
        // check user if already login

            return view('dashboard');
    }
    // public function Clang(){
    //     return view('Clang');
    //     }
    //     public function Cplus(){
    //         return view('C++');
    //         }
    //         public function Java(){
    //             return view('Java');
    //             }
    }
