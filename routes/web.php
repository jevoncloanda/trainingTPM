<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\IsAdminMiddleware;
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
    return view('welcome');
});


Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');

Route::get('/get-books', [BookController::class, 'getBooks'])->name('getBooks');

Route::get('/update-book/{id}', [BookController::class, 'getBookById'])->name('getBookById');

Route::patch('/update-book/{id}', [BookController::class, 'updateBook'])->name('updateBook');

Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');

Route::get('/createstudent', [StudentController::class, 'getCreateStudent'])->name('getCreateStudent');

Route::post('/createstudent', [StudentController::class, 'createStudent'])->name('createStudent');

Route::get('/get-students', [StudentController::class, 'getStudents'])->name('getStudents');

Route::get('/update-student/{id}', [StudentController::class, 'getStudentById'])->name('getStudentById');

Route::patch('/update-student/{id}', [StudentController::class, 'updateStudent'])->name('updateStudent');

Route::delete('/delete-student/{id}', [StudentController::class, 'deleteStudent'])->name('deleteStudent');

Route::get('/hello', function () {
    echo ('Hello World');
});

Auth::routes();

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => IsAdminMiddleware::class, 'prefix' => 'admin'], function () {
    Route::get('/create', [BookController::class, 'getCreatePage'])->name('getCreatePage');
});
