<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsulController extends Controller{
    
    public function index(){

        return view('PrincipalConsul');
    }
}
