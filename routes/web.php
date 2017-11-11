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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/AjaxGet', function () {
    return view('AjaxGet');
});
Route::get('/AjaxGet/demo1', function () {
    return view('demoGet1_test');
});
Route::get('/AjaxGet/demo2', function () {
    return view('demoGet2_test');
});
Route::get('/AjaxGet/demo1', function () {
    return view('demoGet1_test');
});
Route::get('/AjaxGet/demo2', function () {
    return view('demoGet2_test');
});



Route::get('/AjaxGet2', function () {
    return view('AjaxGet2');
});
Route::get('/AjaxGet2/demo3', function () {
    return view('demoGet3_test');
});
Route::get('/AjaxGet2/demo4', function () {
    return view('demoGet4_test');
});


Route::get('/AjaxPost', function () {
    return view('AjaxPost');
});
Route::post('/AjaxPost/demo1', 'AjaxController@index');

Route::post('/AjaxPost/demo2', function () {
    return view('demoPost2_test');
});