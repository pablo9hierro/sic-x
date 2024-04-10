<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\CadastroController;



class InicialController extends Controller
{
   
    public function index(){
     

      return view('inicial');


    }
}