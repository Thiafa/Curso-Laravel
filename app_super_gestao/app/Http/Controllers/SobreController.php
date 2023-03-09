<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
       public function mostrarSobre(){
       return view('site.sobre-nos');
    }
}
