<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Curso; 

class CursoController extends Controller
{
    //abre o formulario de cadastro
    public function mostrarFormCurso(){
        return view('cad_curso');
    }

    public function index(){
        return view('index');
    }

    public function cadastroCurso(Request $request){
        $registroCurso = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'idcategoria' => 'numeric|required',
            'valor' => 'numeric|required'
        ]);

        Curso::create($registroCurso);

        return Redirect::route('index');
    }
}
