<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\logbooks;

class logbookController extends Controller
{
    public function show(Request $request){
    	return view('logbook.index');
    }
//     public function output(Request $request){
//     	$first_name = $request->first_name;
//     	$last_name = $request->last_name;
//     	$age = $request->age;

//     	$variable = new logbooks;
//     	$variable->first_name = $first_name;
//     	$variable->last_name = $last_name;
//     	$variable->age = $age;

//     	$variable -> save();

//     	$logbooks = logbooks::all();

//     	return view ('logbook.output', compact('logbooks'));
//     }
// }
