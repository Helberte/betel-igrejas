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
        Schema::create('origens', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('data_expedicao')->nullable();
            $table->char('UF_naturalidade','2')->nullable();
            $table->string('nacionalidade','300')->nullable();
            $table->string('naturalidade','300')->nullable();

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
        Schema::dropIfExists('origens');
    }
};
