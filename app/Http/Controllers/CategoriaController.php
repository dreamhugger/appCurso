<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function mostrarFormCat(){
        return view('cad_categoria');
    }

    public function index(){
        return view('index');
    }
}
