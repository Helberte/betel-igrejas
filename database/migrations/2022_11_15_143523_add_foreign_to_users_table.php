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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('fk_perfil_user_id');
            $table->foreign('fk_perfil_user_id')->references('id')->on('perfil_user');
            $table->unsignedInteger('fk_congregacao_id');
            $table->foreign('fk_congregacao_id')->references('id')->on('congregacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fk_perfil_user_id');
            $table->dropForeign('fk_congregacao_id');
        });
    }
};
