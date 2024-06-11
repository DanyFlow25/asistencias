<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ver(){
        //ARRAY DE USUARIOS
        $usuarios = [];
        //FOR QUE GENERE 10 USUARIOS
        for ($i=0; $i < 10; $i++) { 
            //crear un usuario
            $usuario = new \stdClass();
            //asignarle un nombre
            $usuario->nombre = 'Usuario '.$i;
            //asignarle un correo
            $usuario->correo = 'usuario'. $i .'@gmail.com';
            //agregar el usuario al array
            $usuarios[] = $usuario;
        }
            
        //Sirve para ver el contenido de la variable
        //dd($usuarios);
        //Retornar la vista con el usuario
        return view('usuarios.vista', compact('usuarios'));
    }
}