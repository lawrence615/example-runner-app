<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskItemController;
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
    return view('pages.home');
})->name('home');

Route::controller(TaskController::class)->prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks');
    Route::get('/view/{id}', [TaskController::class, 'view'])->name('tasks.view');
    Route::post('/item/update-position', [TaskItemController::class, 'update'])->name('items.update.position');
});
