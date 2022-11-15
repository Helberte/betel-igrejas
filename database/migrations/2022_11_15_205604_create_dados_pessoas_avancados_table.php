<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_pessoas_avancados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome_pai','600')->nullable();
            $table->string('nome_mae','600')->nullable();
            $table->string('local_trabalho','700')->nullable();
            $table->string('profissao','600')->nullable();
            $table->date('data_casamento')->nullable();
            $table->string('motivo_entrada','700')->nullable();
            $table->char('ano_conversao','4')->nullable();
            $table->date('data_saida')->nullable();
            $table->string('motivo_saida','1000')->nullable();
            $table->date('data_reintegracao')->nullable();
            $table->string('grupo_sanguineo','5')->nullable();
            $table->boolean('doador_sangue')->nullable();
            $table->boolean('doador_orgao')->nullable();
            $table->boolean('esta_em_disciplina')->nullable();
            $table->date('data_entrada')->nullable();
            $table->text('observacoes','2000')->nullable();

            $table->unsignedInteger('fk_pessoa_id');
            $table->foreign('fk_pessoa_id')->references('id')->on('pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_pessoas_avancados');
    }
};
