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
    
            $table->dropForeign('areas_fk_CNPJ_foreign');
            $table->dropColumn('fk_CNPJ');
  

        Schema::dropIfExists('areas');
    }
}
