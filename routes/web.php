<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
    return view('welcome'); //既存
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); //よくわからない


Route::get('/todolist', [TodoController::class, 'todolist'])->name('todolist'); //ToDoリスト
Route::get('/todos/createTask',[TodoController::class, 'create']); //追加する
//Route::get('/editor',[TodoController::class, 'editor']); //編集する
Route::get("todos/{todo}",[TodoController::class, 'xmission']); //詳細画面
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']); //
Route::put('/todos/{todo}', [TodoController::class, 'update']); //


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Route::get('/record/{record}',[RecordController::class , 'todo_list'];
