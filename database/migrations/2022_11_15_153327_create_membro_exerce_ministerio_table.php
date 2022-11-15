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
        Schema::create('membro_exerce_ministerio', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            
            $table->unsignedBigInteger('fk_ministerios_id');
            $table->char('fk_cpf_membros','11');
            $table->foreign('fk_ministerios_id')->references('id')->on('ministerios');
            $table->foreign('fk_cpf_membros')->references('cpf')->on('membros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membro_exerce_ministerio');
    }
};
