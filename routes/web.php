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




Route::get('/criar', [TicketController::class,'criarTickets'])->name('ticket.create');
Route::get('/visualizar', [TicketController::class,'visualizarTickets'])->name('ticket.list');
Route::post('/criar', [TicketController::class,'armazenarTickets'])->name('ticket.store');


Route::get('/inicio', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::fallback(function (){
    return view('components.fallback');
});

require __DIR__.'/auth.php';



