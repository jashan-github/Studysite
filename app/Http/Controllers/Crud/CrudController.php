<?php

namespace App\Http\Controllers\Crud;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Program::paginate(5);
        return view('Programs', compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Crud.insert');
    }

    /**
     * Store a newly created resource in storage.*/

    public function store(Request $request)
    {
        // validate the data
         $inputdata = $request->validate([
            'topic'        =>      'required',
            'programs'     =>      'required'
        ]);

         $insert = Program::create($inputdata);
        return redirect('Programs')->with('success', 'data is successfully added');

        }
    /** @return \Illuminate\Http\Response*/

    public function edit($id)
    {
        $items=Program::find($id);
        return view('Crud.edit',compact('items'));

    }

    public function update(Request $request)
    {
        $id = $request->id;
         $request->validate([
            'topic' => 'required',
            'programs' => 'required',
        ]);

        $updateArr = array(
            "topic"=>$request->topic,
            "programs"=>$request->programs,
        );

        DB::table('programs')->where('id',$id)->update($updateArr);

        return redirect('Programs')->with('success', 'Record Update successfully');
    }
    /**Remove the specified resource from storage.*/
    public function destroy($id)
    {
        $items=Program::find($id);
        $items->delete();
        return redirect('Programs')->with('success', 'Record delete successfully');
    }


}
