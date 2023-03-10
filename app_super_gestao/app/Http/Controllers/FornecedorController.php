<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome'=>'Fornecedor 1', 
                'status'=>'S', 
                'cnpj'=>'00.000.000/000-00', 
                'ddd'=>'32', 
                'telefone'=>'9999-9999'
            ],
            1 => [
                'nome'=>'Fornecedor 2', 
                'status'=>'S', 
                'cnpj'=>'00.000.000/000-00', 
                'ddd'=>'85', 
                'telefone'=>'9999-9999'
            ],
            2 => [  
                'nome'=>'Fornecedor 3', 
                'status'=>'S', 
                'cnpj'=>'00.000.000/000-00', 
                'ddd'=>'11', 
                'telefone'=>'9999-9999'
            ],
        ];

        // $fornecedores = [];
        
        // Operador Ternário
        // $resultado = (isset($fornecedores[2]['teste']))?'Verdadeiro' : 'Falso';
        // echo $resultado;

        return view('site.index', compact('fornecedores'));
    }
}


