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
        Schema::create('classe_ebd', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome','300');
            $table->integer('idade_minima')->unsigned();
            $table->integer('idade_maxima')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classe_ebd');
    }
};
