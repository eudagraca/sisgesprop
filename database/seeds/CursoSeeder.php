<?php

use App\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create([
            'nome' => 'Ciências de Administração e Gestão',
            'codigo' => 'CAG',
            'grau_id' => 1,
            'preco' => 4800,
            'duracao' => 3,
            'credito' => 260,
            'preco_cadeira_atraso' => 125,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        Curso::create([
            'nome' => 'Engenharia Informatica e Tecnologias',
            'codigo' => 'EIT',
            'grau_id' => 1,
            'preco' => 5500,
            'duracao' => 3,
            'credito' => 360,
            'preco_cadeira_atraso' => 175,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        Curso::create([
            'nome' => 'Teologia',
            'codigo' => 'TEO',
            'grau_id' => 1,
            'preco' => 4800,
            'duracao' => 4,
            'credito' => 480,
            'preco_cadeira_atraso' => 125,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

    }
}
