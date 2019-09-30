<?php

use App\Cadeira;
use Illuminate\Database\Seeder;

class CadeiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cadeira::create([
            'nome' => 'Algoritmo e Estrutura de dados',
            'codigo' => 'EET02',
            'creditos' => 5,
            'ano' => 1,
            'semestre' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        Cadeira::create([
            'nome' => 'Interação Homem Máquina',
            'codigo' => 'EET021',
            'creditos' => 6,
            'ano' => 2,
            'semestre' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        Cadeira::create([
            'nome' => 'Programação para web',
            'codigo' => 'EET006',
            'creditos' => 6,
            'ano' => 3,
            'semestre' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        Cadeira::create([
            'nome' => 'Programação I',
            'codigo' => 'EET006',
            'creditos' => 6,
            'ano' => 2,
            'semestre' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

    }
}
