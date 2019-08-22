<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
// Route::get('/welcome/{name}', function ($name) {
//     return view('welcome',['name'=>$name]);
// });
Route::get('/welcome/{name}', 'CustomerController@welcome');
Route::get('/hii', 'CustomerController@hii');
Route::get('/maths', 'CustomerController@maths')->name('maths');
Route::post('/data', 'CustomerController@data')->name('data');
// Route::get('/maths', 'CustomerController@maths'); without name
// Route::get('/maths', function () {
//     return view('maths'); 
// })->name('maths');
Route::get('/physics', function () {
    return view('physics');
})->name('physics');
// Route::post('/data', function (\Illuminate\Http\Request $request) {

//     // $this->validate($request,[
//     //     'freeText'=>'required',
//     //     'age'=>'required',
//     // ]);
   
//    $freeText = $request->input('freeText');
//    $age=$request->input('age');
//    $tArray = array("freeText" => $freeText,"age"=>$age);
//     return view('data',compact('tArray'));
// })->name('data');
// Route::post('test', function () {
//     echo 'POST';
// });
// Route::get('test', function () {
//     echo '<form method="POST" action="test">';
//     echo '<input type="submit">';
//     echo '</form>';
// });
// Route::put('test', function () {
//     echo 'PUT';
// });
// Route::delete('test', function () {
//     echo 'DELETE';
// });
