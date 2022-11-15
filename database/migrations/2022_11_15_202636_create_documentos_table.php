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
        Schema::create('documentos', function (Blueprint $table) {
            $table->char('cpf','11')->unique();
            $table->timestamps();
            $table->string('rg','15')->nullable();
            $table->string('secao_titulo_eleitor','200')->nullable();
            $table->string('zona_titulo_eleitor','200')->nullable();
            $table->string('titulo_eleitor','200')->nullable();
            $table->date('data_emissao_rg')->nullable();
            $table->string('local_titulo_eleitor','200')->nullable();

            $table->primary('cpf');
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
        Schema::dropIfExists('documentos');
    }
};
