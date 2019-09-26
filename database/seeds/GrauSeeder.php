<?php

use Illuminate\Database\Seeder;
use App\Grau;
class GrauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grau::create(['grau' => 'Licenciatura']);
        Grau::create(['grau' => 'Mestrado']);

    }
}
