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
        Schema::create('campo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name_campo','600');
            $table->string('nome_denominacao','700');
            $table->string('image','1000')->nullable();
            $table->string('ministerio','600');

            $table->unsignedBigInteger("fk_pastor_id");
            $table->foreign("fk_pastor_id")->references("id")->on('pastor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campo');
    }
};
