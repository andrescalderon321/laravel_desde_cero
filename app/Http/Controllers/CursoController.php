<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    // dentro de la clase controller,creo todas las funciones que voy a utilizar para 
    // la logica de las rutas 

    public function index(){

        return view('Cursos.index') ;

    }

    // el metodod view('Cursos.create'); llama a la carpeta cursos y el archivo create para ingresar a la vista html
    public function create(){

        return view('Cursos.create');

    }

    //  return view('Cursos.show',['curso'=>$curso]); en este metodo se ingresa la variable curso 
    public function show($curso){

        return view('Cursos.show',['curso'=>$curso]);

    }


}
