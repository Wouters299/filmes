<?php

namespace Database\Seeders;


use App\Models\Filme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class filmesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filme::create([
            'nome' => 'Super-Herói',
            'sinopse' => 'filme_legal',
            'ano' => '2001',
            'categoria' => 'Heroi',
            'imagem' => 'fonte',
            'trailer' => 'fonte'
        ]);
    }
}
