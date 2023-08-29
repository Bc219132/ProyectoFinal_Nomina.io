<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index (){
        //return "Login principal";
        return view('Login');
    }

    public function create(){
        return "Creación de juegos, con controlador";
    }

    public function help($name_game, $categoria=null){
        if($categoria){
            return "Bienvenido a la página:".$name_game." que pertenece:".$categoria;
        }else{
            return "Bienvenido a la página:".$name_game;
        }
    }


    
}
