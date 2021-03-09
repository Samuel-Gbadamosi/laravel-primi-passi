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
|
*/

Route::get('/', function () {
   $data = [
     'details' =>
     [
     'name' => 'sam',
      'age' => '40',
      'occupation' => 'programmer',
      'state' => 'Catania',
    ]


   ];
    return view('home',$data);
});
Route::get('/about', function () {
    return 'bye';
});
