<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function mostrarContato(){
       return view('site.contato', ['titulo'=>'Contato']);
    }
}
