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
#region pruebas 
/*
Route::get('/', function () {
    return view('welcome');
});


Route::view('/', 'welcome');


Route::get('welcome', function () {
    return "hola mundo";
});

Route::get('bye', function () {
    return 'hasta luego lucas';
});

Route::match(['get', 'post'], 'numeroAlAzar', function () {
    return rand(1, 10);
});


//parametros opcionales y con patrones
Route::pattern('usuario', '\d+');

Route::get('usuario/{usuario?}', function ($usuario = null) {
    if ($usuario === null) {
        return "sin usuario";
    };
    return "eres el usuario $usuario";
});

//una ruta para convertir de hexadecimal a decimal

//el patron de hexadecimal 
Route::pattern('valorHex', '[0-9A-Fa-f]+');
Route::get('conversor/hexadecimal/{valorHex}', function ($valorHex) {
    return hexdec($valorHex);
});

Route::get(
    'conversor/hexadecimal/{valorHex}',
    ['as' => 'convertir', function ($valorHex) {
        return hexdec($valorHex);
    }]
);
*/
#endregion
