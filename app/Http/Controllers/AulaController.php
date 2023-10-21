<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Aula; 

class AulaController extends Controller
{
    //abre o formulario de cadastro
    public function mostrarFormAula(){
        return view('cad_aula');
    }

    public function index(){
        return view('index');
    }

    public function cadastroAula(Request $request){
        $registroAula = $request->validate([
            'idcurso' => 'numeric|required',
            'tituloaula' => 'string|required',
            'urlaula' => 'string|required'
        ]);

        Aula::create($registroAula);

        return Redirect::route('index');
    }
}
