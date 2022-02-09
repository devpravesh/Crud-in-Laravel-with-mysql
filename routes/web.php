<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/forms', function ()      
//  {      
// return view('form');
// });  
// Route::get('/success/{name?}', function ($name=null)
//  {      
//     $data = compact('name');
// return view('success')->with($data);
// });  
Route::get('/insert', function () {  
    return view('create');  
}); 



Route::get('/table', function () {  
    return view('table');  
});
Route::get('/index','StudentController@index');


Route::post('/create{name?}','StudentController@store');

Route::delete('/index{id?}', 'StudentController@destroy')
    ->name('users.destroy');


Route::get('/edit{id?}','StudentController@edit')
    ->name('users.edit');
// Route::get('update/{id}', [StudentController::class, 'update']);
Route::post('/update/{id?}', 'StudentController@update');