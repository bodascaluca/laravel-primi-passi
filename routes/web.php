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
})->name('about');

Route::get('/le-nostre-camere', function(){
    $datastanze = [
        'terrazzo'=> false,
        'stanze'=> [
            [
                'name'=> 'Benvenuto in Paradiso',
                'ospiti'=> '5',
                'camere' => '3 camere',
                'bagni' => '2 bagni',
                'terrazzo'=> false,
                'piscina'=> true
            ],
            [
                'name'=> 'Benvenuto nell\'Inferno',
                'ospiti'=> '2',
                'camere' => '2 camere',
                'bagni' => '0 bagni',
                'terrazzo'=> false,
                'piscina'=> false
            ],
            [
                'name'=> 'Benvenuto nel Purgatorio',
                'ospiti'=> '10',
                'camere' => '5 camere',
                'bagni' => '1 bagno',
                'terrazzo'=> true,
                'piscina'=> false
            ],
            [
                'name'=> 'Benvenuto sul pianeta Terra',
                'ospiti'=> '8Migliardi',
                'camere' => '7Migliardi di camere',
                'bagni' => '5Migliardi di bagni',
                'terrazzo'=> true,
                'piscina'=> true
            ],
        ]
    ];
    return view ('camere', $datastanze);
})->name('camere');
