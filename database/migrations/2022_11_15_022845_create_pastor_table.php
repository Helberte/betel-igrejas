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
        Schema::create('pastor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name','500');
            $table->string('sobrenome','500');
            $table->string('telefone','20');
            $table->string('image','1000')->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pastor');
    }
};
