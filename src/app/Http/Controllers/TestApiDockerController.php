<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApiDockerController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('complete')){
            return  \App\Todo::where('is_complete', '=', $request->complete)->get();
        }

        return \App\Todo::all();

    }
}
