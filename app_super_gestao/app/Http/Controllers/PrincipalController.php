<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function mostrarPrincipal(){
        return view ('site.principal', ['titulo'=>'Home']);
    }
}
