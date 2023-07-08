<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    use HasFactory;

    protected $table = 'mapas';

    protected $fillable = [
        'nome',
        'descricao',
        'file_name',
        'file_path',
        'status',
        'id_user',

    ];
}
