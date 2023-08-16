<?php

namespace Database\Seeders;


use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        admin::create([
            'nome' => 'Pitagoras',
            'cpf' => '000000001',
            'senha' => Hash::make('123'),
            
        ]);
    }
}
