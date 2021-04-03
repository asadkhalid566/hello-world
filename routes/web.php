<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\UserController::class, 'home']);

Route::get('/about', [App\Http\Controllers\UserController::class, 'about']);
Route::get('/register', [App\Http\Controllers\UserController::class, 'view']);
Route::post('/register', [App\Http\Controllers\UserController::class, 'register'])->name('register');

Route::post('/registerform', [App\Http\Controllers\UserController::class, 'register']);

Route::get('/login', [App\Http\Controllers\UserController::class, 'login_view']);
Route::post('/login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::post('/loginform', [App\Http\Controllers\UserController::class, 'login']);

Route::get('/contact', [App\Http\Controllers\UserController::class, 'contact']);
Route::get('/instructor', [App\Http\Controllers\UserController::class, 'instructor']);

Route::view('/profile', 'profile');


//admin routes

Route::view('/admins', 'admin/admin_home');

Route::view('/admin', 'admin/admin_home');

Route::get('/admin_std',  [App\Http\Controllers\AdminController::class, 'students']);
Route::get('admin_edit/{id}',  [App\Http\Controllers\AdminController::class, 'students_edit']);
Route::put('studentupdate/{id}',  [App\Http\Controllers\AdminController::class, 'students_update']);


Route::get('/new',  [App\Http\Controllers\AdminController::class, 'allusers']);
Route::DELETE('/admindelete/{id}',  [App\Http\Controllers\AdminController::class, 'admindelete']);


Route::get('/admin_teacher',  [App\Http\Controllers\AdminController::class, 'teacher']);
// Route::get('edit_teacher/{id}',  [App\Http\Controllers\AdminController::class, 'teacher_edit']);
Route::put('/teacher/{id}',  [App\Http\Controllers\AdminController::class, 'teacher_update']);
