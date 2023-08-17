<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;



    protected $table = 'usuarios';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'email',
        'senha'

    ];
}
