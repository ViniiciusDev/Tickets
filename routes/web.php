<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('tickets', [TicketController::class, 'index'])->name('tickets');
/* Rotta parametrica */
Route::get('tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');
/* Rotta  Tipo Post */
Route::post('tickets/answer', [TicketController::class, 'answer'])->name('tickets.answer');
