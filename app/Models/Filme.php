<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;

    protected $table = 'filmes';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'sinopse',
        'ano',
        'trailer',
        'categoria',
        'imagem'
        
    ];
}
