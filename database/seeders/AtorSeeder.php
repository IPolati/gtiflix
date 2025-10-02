<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atores')->insert(
            ['nome' => "Wagner Moura", 'descricao' => "Ator foda brasileiro", 'nacionalidade_id' => 1],
            ['nome' => "Megan Fox", 'descricao' => "Muito lembrada pela atuacao em transformers", 'nacionalidade_id' => 2],
        ); 
    }
}
