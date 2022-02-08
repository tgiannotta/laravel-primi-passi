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
    $data =[
        'supereroi' => [
            'Bruce Banner',
            'Sue Storm',
            'Matt Murdock'

        ]
    ];
    return view('home', $data);
});





/* 'nome' => 'Tommaso',
        'cognome' => 'Giannotta',
        'eta' => 'Non si dice' */