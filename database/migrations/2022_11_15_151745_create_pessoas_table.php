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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome','500');
            $table->string('sobrenome','500');
            $table->string('image','1000')->nullable();
            $table->date('data_nascimento');
            $table->string('sexo','200');
            $table->string('nome_conjuge','500')->nullable();


            $table->unsignedInteger('fk_congregacao_id');
            $table->unsignedInteger('fk_endereco_id');
            $table->unsignedInteger('fk_classe_ebd_id');
            $table->unsignedInteger('fk_grau_instrucao_id');
            $table->unsignedInteger('fk_estado_civil_id');
            $table->foreign('fk_congregacao_id')->references('id')->on('congregacao');
            $table->foreign('fk_endereco_id')->references('id')->on('endereco');
            $table->foreign('fk_classe_ebd_id')->references('id')->on('classe_ebd');
            $table->foreign('fk_grau_instrucao_id')->references('id')->on('graus_instrucao');
            $table->foreign('fk_estado_civil_id')->references('id')->on('estado_civil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membros');
    }
};
