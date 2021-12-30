<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_history', function (Blueprint $table) {
            $table->id();
            $table->text('Mensagem');
            $table->unsignedBigInteger('fk_status')->nullable();
            $table->foreign('fk_status')->references('id')->on('status');
            $table->unsignedBigInteger('fk_anexos')->nullable();
            $table->foreign('fk_anexos')->references('id')->on('anexos');
            $table->unsignedBigInteger('fk_usuario')->nullable();
            $table->foreign('fk_usuario')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('ticket_history', function (Blueprint $table) {
            $table->dropForeign('ticket_history_fk_status_foreign');
            $table->dropColumn('fk_status');
            $table->dropForeign('ticket_history_fk_anexos_foreign');
            $table->dropColumn('fk_anexos');
            $table->dropForeign('ticket_history_fk_usuario_foreign');
            $table->dropColumn('fk_usuario');
        });

        Schema::dropIfExists('ticket_history');
    }
}
