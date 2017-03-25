<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/all', 'studentController@tableShow');
Route::get('/home', 'HomeController@index');
Route::get('/index', 'studentController@show');
Route::get('/students/ron', 'studentController@show2');

Route::post('/submit', 'studentController@output');
Route::post('/add', 'studentController@add');
Route::get('/edit/{id}', 'studentController@edit');
Route::post('/save', 'studentController@save');
Route::get('/delete/{id}', 'studentController@delete');

///---------------------------------------------------------

// Route::get('/finals/home', 'finalController@showHome');
// Route::get('/finals/index', 'finalController@showIndex');


//---------------------------------------------------------

// Route::get('/jaison/index', 'jaisonController@show');
// Route::post('/jaison/add', 'jaisonController@output');
// Route::post('/jaison/addMore', 'jaisonController@show');

// Route::get('/logbook/index','logbookController@show');
// Route::post('/logbook/add', 'logbookController@output');
// Route::post('/logbook/addMore', 'logbookController@show');




// Auth::routes();

// Route::get('/home', 'HomeController@index');

// //------------------------------------------
// Route::get('logbookFinals/list', 'logsController@showAll');
// Route::get('/logbookFinals/index', 'logsController@show');
// Route::get('/logbookFinals/home', 'logsController@homeShow');
// Route::post('/logbookFinals/add', 'logsController@add');
// Route::post('/logbookFinals/addMore', 'logsController@homeshow');
// Route::resource('queries', 'QueryController');
// Route::get('logbookFinals/edit/{id}', 'logsController@edit');
// Route::post('logbookFinals/save', 'logsController@save');
// Route::get('/all', 'logsController@showAll');
// Route::get('logbookFinals/delete/{id}', 'logsController@delete');

// Route::get('/phoneshops/phoneshops');
