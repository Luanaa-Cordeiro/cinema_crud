<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{

    protected $fillable = [
        'nome',
        'quantidade'
    ];
}