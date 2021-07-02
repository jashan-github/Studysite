<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Program;
use Illuminate\Support\Facades\DB;

class ProgramsController extends Controller
{
    // public function list()
    // {
    //     //$data=Program::paginate(3);
    //     $programlist =DB::table('programs')->select()->get();

    //     return view ('Programs',['dataArray' =>$programlist]);
    // }

    // public function insert(){
    //     return view('Crud.insert');
    // }

    // public function addprogram(Request $request){
    //     $inputarray=array(
    //         'topic'=>$request->topic,
    //         'program'=>$request->program,
    //     );
    //     DB::table('programs')->insert($inputarray);
    //     echo "Record inserted successfully.<br/>";
    //  }
}
