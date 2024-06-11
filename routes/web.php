<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuarios\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    //Url de la ruta
    '/usuarios/todos',
    //Controlador y metodo
    [UserController::class, 'ver']
);

Route::get('/hola', function () {
    return ('Hola Mundo');
});
Route::get(
    '/hola/{nombre}',
    function ($nombre) {
        return ('Hola '.$nombre);
    }
);