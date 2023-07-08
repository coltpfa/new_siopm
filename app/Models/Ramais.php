<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ramais extends Model
{
    use HasFactory;

    protected $table = 'ramais';

    protected $fillable = [
        'nome',
        'id_user',
        'tipo',

    ];
}
