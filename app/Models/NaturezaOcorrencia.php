<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaturezaOcorrencia extends Model
{
    use HasFactory;

    protected $table = 'natureza_ocorrencias';

    protected $fillable = [
        'codigo',
        'descricao',
        'status',
        'id_user',
    ];
}
