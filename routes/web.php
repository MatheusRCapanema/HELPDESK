<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix("/criar")->group(function (){
    Route::get('/', [TicketController::class,'criarTickets'])->name('ticket.create');
    Route::post('/', [TicketController::class,'armazenarTickets'])->name('ticket.store');
});

Route::get('visualizar/editar/{id}', [TicketController::class,'editarTickets'])->name('ticket.edit');
Route::put('/visualizar/{id}',[TicketController::class,'update'])->name('ticket.update');

Route::prefix("/visualizar")->group(function (){
    Route::get('/', [TicketController::class,'visualizarTickets'])->name('ticket.list');
    Route::get('/ticket/{id}', [TicketController::class,'visualizarActionTickets'])->name('ticket.id');

    
    Route::get('/deletar/{id}', [TicketController::class , 'delete']);
    Route::get('/deletar/{id}', [TicketController::class , 'destroy'])->name('ticket.destroy'); //Criar function
    Route::post('/ticket/store', [CommentController::class,'armazenarComments'])->name('comment.store');

});






Route::fallback(function (){
    return view('components.fallback');
});

require __DIR__.'/auth.php';



