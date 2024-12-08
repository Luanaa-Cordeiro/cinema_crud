<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'classificacao',
        'ano',
        'id_genero',
    ];

    protected $table = 'filmes';

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero', 'id');
    }
}