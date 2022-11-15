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
        Schema::create('batismos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('cidade_batismo','300')->nullable();
            $table->string('ano_batismo','4')->nullable();
            $table->date('data_batismo')->nullable();
            $table->char('UF_batismo','2')->nullable();
            $table->boolean('batismo_espirito_santo')->nullable();
            $table->string('igreja_batismo_agua','300')->nullable();
            $table->string('ano_batismo_espirito_santo','4')->nullable();

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
        Schema::dropIfExists('batismos');
    }
};
