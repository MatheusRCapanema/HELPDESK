<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->String('Nome_area',25)->nullable();
            $table->String('telefone',10);
            $table->unsignedBigInteger('fk_CNPJ')->nullable();
            $table->foreign('fk_CNPJ')->references('CNPJ')->on('empresas');
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::table('areas', function (Blueprint $table) {
            $table->dropForeign('areas_fk_CNPJ_foreign');
            $table->dropColumn('fk_CNPJ');
        });
=======
    
           
  
>>>>>>> 1c92b1ca16c2fee9e1630baf38b8345127341401

        Schema::dropIfExists('areas');
    }
}
