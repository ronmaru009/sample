<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class finalController extends Controller
{
    public function showHome(Request $request)
    {
    	return view('finals.home');
    }

    public function showIndex(Request $request)
    {
    	config(['app.timezone' => 'Asia/Manila']);
    	return view('finals.index');
    }
}
