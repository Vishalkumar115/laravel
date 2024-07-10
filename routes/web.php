<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentBookController;
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


Route::get('/students/search', [StudentController::class, 'search'])->name('students.search');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// routes/web.php

Route::get('/', [HomeController::class, 'index']);



// Form to create a new student
Route::get('/form', [StudentBookController::class, 'create'])->name('form.create');

// Store a new student
Route::post('/form/store', [StudentBookController::class, 'store'])->name('form.store');

// List all students
Route::get('/students', [StudentBookController::class, 'index'])->name('students.index');

// Form to edit a student
Route::get('/students/{id}/edit', [StudentBookController::class, 'edit'])->name('students.edit');

// Update a student
Route::put('/students/{id}', [StudentBookController::class, 'update'])->name('students.update');

// Delete a student
Route::delete('/students/{id}', [StudentBookController::class, 'destroy'])->name('students.destroy');

//books Route
 Route::post('/books/store', [ProductController::class, 'store'])->name('books.store');
 Route::get('/books', [ProductController::class, 'create'])->name('books.create');






 