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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
  $pasta=config('pasta');
    return view('homepage',['array'=>$pasta]);
});

// Route::get('/product',function(){
//   return redirect('/homepage');
// });
Route::get('/product/{id?}', function($id = null) {
 // dump($id);
 // exit();
 if(empty($id)){
   return redirect('/');
 }
    $pasta=config('pasta');
    return view('product',
        ['idProduct' => $id],['array'=>$pasta]
    );
});
