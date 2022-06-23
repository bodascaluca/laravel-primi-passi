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

Route::get('/', function () { // è una classe definita di laravel 
    $data = [
        'name' => 'Olga',
        'lastname' => 'Demina',
        'isLogginIn' => true,
        'students' => [
            [  
                'name' => 'Luca',
                'lastname' => 'Bodasca'
            ],
            [
                'name' => 'Fabrizio',
                'lastname' => 'Bocca'
            ],
            [
                'name' => 'Francesco',
                'lastname' => 'Armandi'
            ],
        ],
        'anotherArray' => [

        ], 
    ];
    return view('home', $data);
})->name('home');

Route::get('/chi-siamo', function(){// ciò che deve essere messo in url 
    return view ('about');
})->name('about') ;
