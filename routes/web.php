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

Route::get('/MyDetails', function () {
    return view('detalles');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Information', function () {
    return view('informacion');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('auth.login');
});
//Tuto Anterior
Route::get('upload', 'uploadController@index');
Route::post('store', 'uploadController@store');
Route::get('show', 'uploadController@show');

//Nuevo Tuto

Route::get('file', 'FileController@showUploadForm')->name('upload.file');
Route::post('file', 'FileController@storeFile');

//Imagenes Personas

Route::get('/Results/01', function () {
    return view('Results.01');
});
Route::get('/Results/02', function () {
    return view('Results.02');
});
Route::get('/Results/03', function () {
    return view('Results.03');
});
Route::get('/Results/04', function () {
    return view('Results.04');
});
Route::get('/Results/05', function () {
    return view('Results.05');
});
Route::get('/Results/06', function () {
    return view('Results.06');
});
Route::get('/Results/07', function () {
    return view('Results.07');
});
Route::get('/Results/08', function () {
    return view('Results.08');
});
Route::get('/Results/09', function () {
    return view('Results.09');
});
Route::get('/Results/10', function () {
    return view('Results.10');
});
Route::get('/Results/11', function () {
    return view('Results.11');
});
Route::get('/Results/12', function () {
    return view('Results.12');
});
Route::get('/Results/13', function () {
    return view('Results.13');
});
Route::get('/Results/14', function () {
    return view('Results.14');
});
Route::get('/Results/15', function () {
    return view('Results.15');
});
Route::get('/Results/16', function () {
    return view('Results.16');
});
Route::get('/Results/17', function () {
    return view('Results.17');
});
Route::get('/Results/18', function () {
    return view('Results.18');
});
Route::get('/Results/19', function () {
    return view('Results.19');
});
Route::get('/Results/20', function () {
    return view('Results.20');
});
Route::get('/Results/21', function () {
    return view('Results.21');
});
Route::get('/Results/22', function () {
    return view('Results.22');
});
Route::get('/Results/23', function () {
    return view('Results.23');
});
Route::get('/Results/24', function () {
    return view('Results.24');
});
Route::get('/Results/25', function () {
    return view('Results.25');
});
Route::get('/Results/26', function () {
    return view('Results.26');
});
Route::get('/Results/27', function () {
    return view('Results.27');
});
Route::get('/Results/28', function () {
    return view('Results.28');
});
Route::get('/Results/29', function () {
    return view('Results.29');
});


Route::get('/Results/30', function () {
    return view('Results.30');
});


Route::get('/Results/31', function () {
    return view('Results.31');
});

Route::get('/Results/32', function () {
    return view('Results.32');
});




