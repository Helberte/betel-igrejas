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
        Schema::create('membros', function (Blueprint $table) {
            $table->char('cpf','11')->unique();
            $table->timestamps();
            $table->string('nome','500');
            $table->string('sobrenome','500');
            $table->string('celular','15')->nullable();
            $table->string('image','1000')->nullable();
            $table->date('data_nascimento');
            $table->string('sexo','200');

            $table->primary('cpf');
            $table->unsignedInteger('fk_congregacao_id');
            $table->unsignedBigInteger('fk_endereco_id');
            $table->unsignedBigInteger('fk_classe_ebd_id');
            $table->foreign('fk_congregacao_id')->references('id')->on('congregacao');
            $table->foreign('fk_endereco_id')->references('id')->on('endereco');
            $table->foreign('fk_classe_ebd_id')->references('id')->on('classe_ebd');
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
