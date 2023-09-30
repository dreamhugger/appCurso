<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_curso',
        'carga_horario',
        'id_categoria',
        'valor'
    ];
}
