<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudyante;


class studentController extends Controller
{
     public function show(Request $request)
    {
    	return view('index');
    }

    public function tableShow(Request $request){
        $estudyantes = estudyante::all();

        return view ('output', compact('estudyantes'));
    }
    

    public function output(Request $request)
    {
    	$fname = $request->fname;
    	$mname = $request->mname;
    	$lname = $request->lname;
    	$course = $request->course;
    	$student_no = $request->student_no;
    	$contact_no = $request->contact_no;

    	$member = new estudyante;
    	$member->fname = $fname;
    	$member->mname = $mname;
    	$member->lname = $lname;
    	$member->course = $course;
    	$member->student_no = $student_no;
    	$member->contact_no = $contact_no;


    	$member->save();


    	$estudyantes = estudyante::all();

    	//return $estudyantes;
    	return view('output',compact('estudyantes'));
    }
      public function add(Request $request)
     {
    	return view('index');
    }

    public function edit(Request $request, $id){
    	$estudyantes = estudyante::find($id);
    	return view('edit', compact('estudyantes'));
    }

    public function save(Request $request){
    	$id = $request->id;
    	$fname = $request->fname;
    	$mname = $request->mname;
    	$lname = $request->lname;
    	$course = $request->course;
    	$student_no = $request->student_no;
    	$contact_no = $request->contact_no;

    	$estudyantes=estudyante::find($id);
    	$estudyantes->id=$id;
    	$estudyantes->fname = $fname;
    	$estudyantes->mname = $mname;
    	$estudyantes->lname = $lname;
    	$estudyantes->course = $course;
    	$estudyantes->student_no = $student_no;
    	$estudyantes->contact_no = $contact_no;


    	$estudyantes->save();

       return redirect('/all');

    	
    }
    public function delete(Request $request, $id)
    {
    	$estudyantes = estudyante::find($id);
    	$estudyantes->delete();

    	

    	// //return $estudyantes;
    	return redirect('/all');


    	    }




}
