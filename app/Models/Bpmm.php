<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpmm extends Model
{
    use HasFactory;

    protected $table = 'bpmms';

    protected $fillable = [
        'nome',
        'tipo',
        'id_user',

    ];
}
