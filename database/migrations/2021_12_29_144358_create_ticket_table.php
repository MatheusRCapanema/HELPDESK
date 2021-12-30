<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id();
            $table->text('Assunto')->nullable();
            $table->text('Problema');
            $table->unsignedBigInteger('fk_Prioridade')->nullable();
            $table->foreign('fk_Prioridade')->references('id')->on('prioridade');
            $table->unsignedBigInteger('fk_status')->nullable();
            $table->foreign('fk_status')->references('id')->on('status');
            $table->unsignedBigInteger('fk_anexo')->nullable();
            $table->foreign('fk_anexo')->references('id')->on('anexos');
            $table->unsignedBigInteger('fk_Area_Atendente')->nullable();
            $table->foreign('fk_Area_Atendente')->references('id')->on('areas');
            $table->unsignedBigInteger('fk_Usu_Solicitante')->nullable();
            $table->foreign('fk_Usu_Solicitante')->references('id')->on('users');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('ticket', function (Blueprint $table) {
            $table->dropForeign('ticket_fk_Prioridade_foreign');
            $table->dropColumn('fk_Prioridade');
            $table->dropForeign('ticket_fk_status_foreign');
            $table->dropColumn('fk_status');
            $table->dropForeign('ticket_fk_anexo_foreign');
            $table->dropColumn('fk_anexo');
            $table->dropForeign('ticket_fk_Area_Atendente_foreign');
            $table->dropColumn('fk_Area_Atendente');
            $table->dropForeign('ticket_fk_Usu_Solicitante_foreign');
            $table->dropColumn('fk_Usu_Solicitante');
            
        });


        Schema::dropIfExists('ticket');
    }
}
