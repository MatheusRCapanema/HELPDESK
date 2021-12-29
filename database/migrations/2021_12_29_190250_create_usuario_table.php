<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->String('Nome',100);
            $table->String('Email',60);
            $table->String('Senha',50);
            $table->unsignedBigInteger('fk_Area')->nullable();
            $table->foreign('fk_Area')->references('id')->on('areas');
            $table->unsignedBigInteger('fk_Perfil')->nullable();
            $table->foreign('fk_Perfil')->references('id')->on('perfil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        $table->dropForeign('usuario_fk_Area_foreign');
        $table->dropColumn('fk_Area');
        $table->dropForeign('usuario_fk_Perfil_foreign');
        $table->dropColumn('fk_Perfil');

        Schema::dropIfExists('usuario');
    }
}
