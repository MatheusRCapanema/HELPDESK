<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_fk_Area_foreign');
            $table->dropColumn('fk_Area');
            $table->dropForeign('users_fk_Perfil_foreign');
            $table->dropColumn('fk_Perfil');
        });
       
        

        Schema::dropIfExists('users');
    }
}
