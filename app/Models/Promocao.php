<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    protected $fillable = [
        'disponiveis',
        'valor_atual',
        'valor_promocao',
    ];
}
