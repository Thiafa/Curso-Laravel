<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = ['Fornecedor 1'];
        return view('site.index', compact('fornecedores'));
    }
}
