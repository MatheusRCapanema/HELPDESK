<?php

use App\Http\Controllers\TicketController;
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



Route::prefix("/visualizar")->group(function (){
    Route::get('/', [TicketController::class,'visualizarTickets'])->name('ticket.list');
    Route::get('/ticket/{id}', [TicketController::class,'visualizarActionTickets'])->name('ticket.id');
    Route::get('/editar/{id}', [TicketController::class,'editarTickets'])->name('ticket.edit');
    Route::post('/update/{id}',[TicketController::class,'update'])->name('ticket.update');
    Route::get('/deletar/{id}', [TicketController::class , 'criar'])->name('ticket.delete'); //Criar function
});

Route::fallback(function (){
    return view('components.fallback');
});

require __DIR__.'/auth.php';



