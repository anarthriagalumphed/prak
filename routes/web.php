<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
////////////////////////////////////////////
Route::get('/', function () {
    return view('welcome');
});

/////////////////////////////////////////
Route::get('/hello', function () {
    return view('hello world');
});

Route::view('/hello','hello');

///////////////////////////////////////
route::get('/coba/{id}', function (string $id) {
    return view('coba', ['id' =>$id]);
});

////////////////////////////////////// get method
// Route::get('/biodata-submit', function (Request $request) {
//     return $request;
// });
// Route::view('/biodata','biodata');

////////////////////////////////// post method
Route::post('/biodata-submit', function (Request $request) {
    $output =   "Nama : $request->Nama <br>
                Email : $request->Email <br>
                No.Hp : $request->No_hp";
    return $output;
});

Route::view('/biodata','biodata');