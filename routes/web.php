<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\buyerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('buyers/index', [buyerController::class, 'index']); // list of buyers
Route::get('buyers/create', [buyerController::class, 'create']); // create buyers acc
Route::post('buyers/store', [buyerController::class, 'store']); // store buyers database
Route::get('buyer/{buyer}/edit', [buyerController::class, 'edit'])->name('buyers.edit');  // Views the edit page
Route::put('buyers/{buyer}/update', [BuyerController::class, 'update'])->name('buyers.update');// update buyers acc
Route::delete('buyers/{buyer}', [BuyerController::class, 'delete'])->name('buyers.delete'); // delete buyers