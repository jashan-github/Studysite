<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function searchData(Request $request)
    {

        $q= $request->get('search');

        $items= DB::table('programs')->where('topic', 'like', '%'.$q. '%')->paginate(500);

        return view('viewsearch',compact('items'));
    }
}
