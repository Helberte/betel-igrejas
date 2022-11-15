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
        Schema::create('endereco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('rua','600');
            $table->string('rua_numero','20');
            $table->string('bairro','600');
            $table->string('cidade','150');
            $table->string('estado','150');
            $table->string('cep','15')->nullable();
            $table->char('UF','2');
            $table->string('complemento','600')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
};
