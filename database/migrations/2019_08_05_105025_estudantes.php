<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estudantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('nr_bi');
            $table->string('nacionalidade');
            $table->string('local_emissao_bi');
            $table->date('data_emissao_bi');
            $table->date('data_validade_bi');
            $table->date('data_nascimento');
            $table->string('naturalidade');
            $table->enum('sexo', ['masculino', 'feminino', 'outro']);
            $table->enum('estado_civil', ['casado', 'divorciado', 'solteiro']);
            $table->string('ocupacao');
            $table->string('email');
            $table->bigInteger('telefone_principal');
            $table->bigInteger('telefone_alternativo')->nullable();
            $table->string('morada');
            $table->string('morada_localidade');
            $table->string('morada_pais');
            $table->integer('codigo_postal')->nullable();
            $table->string('qualificacao_previa');
            $table->string('instituicao_ensino_medio');
            $table->date('data_conclusao');
            $table->string('localidade_morada_educacao');
            $table->string('pais_estudo');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudantes');

    }
}
