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
})->name('homepage');

// Route::get('/product',function(){
//   return redirect('/homepage');
// });
Route::get('/product/{id?}', function($id = null) {
 // dump($id);
 // exit();
 if(empty($id)){
   // return redirect('/');
   abort(404);
 }
    $pasta=config('pasta');

// il count torna il conteggio di un essere umano perciò va bene
if($id > count($pasta)){
  abort(404);
}

    return view('product',
        ['idProduct' => $id],['array'=>$pasta]
    );
})->name('products');

Route::get('/news', function () {
  $news=config('news');
    return view('news',['array'=>$news]);
})->name('news');


// alternative per filtrare
Route::get('/test', function () {
  $pasta = config('pasta');

  $pastalunga = collect($pasta)->where('tipo', 'lunga');
  $pastacorta = collect($pasta)->where('tipo', 'corta');
  $pastacortissima = collect($pasta)->where('tipo', 'cortissima');
  // dd($pastacorta);
// dd($pastacorta);
// oppure

  // $pastalunga = array_filter($pasta, function($item) {
  //   return $item['tipo'] === 'lunga';
  // });
  // pastacorta = array_filter($pasta, function($item) {
  //   return $item['tipo'] === 'corta';
  // });
  // $pastacortissima = array_filter($pasta, function($item) {
  //   return $item['tipo'] === 'cortissima';
  // });

// array di array associativi
// col for each esterno mi giro i tipi
// con quello interno i singoli array col dettaglio di prodotti
  $data = [
    'types_list' => [
      'lunghe' => $pastalunga,
      'corte' => $pastacorta,
      'cortissime' => $pastacortissima,
    ]
  ];
  // dd($data);
  return view('test', $data);
})->name('test');
