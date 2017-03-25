<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\log;
use App\Http\Requests\logRequest;

class logsController extends Controller
{

	public function __construct(){
		$this->middleware('auth', ['only' => 'homeShow']);
		$this->middleware('auth', ['only' => 'showAll']);
	}

	public function showAll(Request $request){
        $logs = log::all();

        return view ('logbookFinals.list', compact('logs'));
    }
   
	public function show(Request $request){
		return view('logbookFinals.index');
	}

	public function homeShow(Request $Request){

		

		return view('logbookFinals.home');
	}

	public function add(logRequest $request){
		$date = $request->date;
		$fname = $request->fname;
		$lname = $request->lname;
		$destination = $request->destination;
		$timein = $request->timein;
		$timeout = $request->timeout;

		$member = new log;
		$member->date = $date;
		$member->fname = $fname;
		$member->lname = $lname;
		$member->destination = $destination;
		$member->timein = $timein;
		$member->timeout = $timeout;

		$member->save();

		$logs = log::all();

		\Session::flash('flash_message', 'New record has been added successfully!');

		return view('logbookFinals.list',compact('logs')); 
	}

	public function edit(Request $request, $id){
		$logs = log::find($id);

		return view('logbookFinals.edit', compact('logs')); 
	}

	public function save(logRequest $request){
		$id = $request->id;
		$date = $request->date;
		$fname = $request->fname;
		$lname = $request->lname;
		$destination = $request->destination;
		$timein = $request->timein;
		$timeout = $request->timeout;

		$logs=log::find($id);
		$logs->id=$id;
		$logs->date=$date;
		$logs->fname=$fname;
		$logs->lname=$lname;
		$logs->destination=$destination;
		$logs->timein=$timein;
		$logs->timeout=$timeout;

		$logs->save();
		\Session::flash('flash_message_edit', '1 record has been edited successfully!');

		return redirect('/all');

	}

	public function delete(Request $request, $id)
    {
    	$logs = log::find($id);
    	$logs->delete();

    	\Session::flash('flash_message_delete', '1 record has been deleted successfully!');

    	

    	// //return $estudyantes;
    	return redirect('/all');


    	    }
    
}
