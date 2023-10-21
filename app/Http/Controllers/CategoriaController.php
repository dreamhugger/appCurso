<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Categoria; 

class CategoriaController extends Controller
{
    //abri o formulario de cadastro
    public function mostrarFormCategoria(){
        return view('cad_categoria');
    }

    public function index(){
        return view('index');
    }

    public function cadastroCategoria(Request $request){
        $registroCategoria = $request->validate([
            'nomecategoria' => 'string|required'
        ]);

        Categoria::create($registroCategoria);

        return Redirect::route('index');
    }
}
