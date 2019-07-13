<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SimularcreditoController extends Controller
{
    function index()
    {
        $tipocreditolist = DB::table('tipocreditos')
            ->groupBy('id')->get();
        return view('juros')->with('tipocreditolist', $tipocreditolist);
    }

}
