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
        Schema::create('congregacao', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome','600');
            $table->string('CNPJ','20');
            $table->boolean('sede');
            $table->string('telefone','15')->nullable();

            $table->unsignedBigInteger('fk_endereco_id');
            $table->foreign('fk_endereco_id')->references('id')->on('endereco');
            $table->unsignedBigInteger('fk_pastor_id');
            $table->foreign('fk_pastor_id')->references('id')->on('pastor');
            $table->unsignedBigInteger('fk_campo_id');
            $table->foreign('fk_campo_id')->references('id')->on('campo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('congregacao');
    }
};
