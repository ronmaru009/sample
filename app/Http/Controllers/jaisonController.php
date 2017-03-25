<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jaison;

class jaisonController extends Controller
{
    public function show(Request $request)
    {
    	return view('jaison.index');
    }

    public function output(Request $request)
    {
    	$fname = $request->fname;
    	$lname = $request->lname;
    	$age = $request->age;

    	$data = new jaison;
    	$data->fname = $fname;
    	$data->lname = $lname;
    	$data->age = $age; 

    	$data->save();

    	$jaisons = jaison::all();

    	return view('jaison.output', compact('jaisons'));


    }

}
