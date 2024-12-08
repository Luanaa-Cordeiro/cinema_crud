<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    protected $table = 'generos';

    public function filmes()
    {
        return $this->hasMany(Filme::class, 'id_genero', 'id');
    }
}