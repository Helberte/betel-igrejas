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
        Schema::create('novos_convertidos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('aceita_visitas');
            $table->string('melhor_horario','600');
            $table->date('data_conversao')->nullable();

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
        Schema::dropIfExists('novos_convertidos');
    }
};
