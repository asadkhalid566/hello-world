<?php

use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/homes', function () {
    return view('homes');
});


// Route::get('/', [App\Http\Controllers\UserController::class, 'home']);

Route::get('/about', [App\Http\Controllers\UserController::class, 'about']);
Route::get('/register', [App\Http\Controllers\UserController::class, 'view']);
Route::get('/contact', [App\Http\Controllers\UserController::class, 'contact']);
Route::get('/instructor', [App\Http\Controllers\UserController::class, 'instructor']);
Route::post('/summernote',  [App\Http\Controllers\DiaryController::class, 'summernote'])->name('summernote');
Route::post('/dynamicdependent',  [App\Http\Controllers\DiaryController::class, 'dynamicdependent'])->name('dynamicdependent');


Route::group([ 'middleware' => 'auth'], function()
{

//admin routes
Route::group([ 'middleware' => 'Authcheck'], function()
{
    Route::view('admin_home', 'admin/admin_home');
Route::DELETE('/admindelete/{id}',  [App\Http\Controllers\AdminController::class, 'admindelete']);

Route::get('/new',  [App\Http\Controllers\AdminController::class, 'allusers']);

Route::get('/admin_teacher',  [App\Http\Controllers\AdminController::class, 'teacher']);
Route::put('/teacher/{id}',  [App\Http\Controllers\AdminController::class, 'teacher_update']);
Route::get('teacher_delete/{id}',  [App\Http\Controllers\AdminController::class, 'teacher_delete']);
Route::get('record_delete/{id}',  [App\Http\Controllers\AdminController::class, 'record_delete']);
Route::put('record/{id}',  [App\Http\Controllers\AdminController::class, 'record']);

Route::get('status/{id}',  [App\Http\Controllers\AdminController::class, 'status']);
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/diary', [App\Http\Controllers\DiaryController::class, 'diary']);
Route::get('admin_profile',  [App\Http\Controllers\AdminController::class, 'admin_profile']);
Route::get('profile/{id}',  [App\Http\Controllers\AdminController::class, 'getprofile']);
Route::post('gprofile/{id}',  [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');

Route::get('/viewdiary/{id}',  [App\Http\Controllers\DiaryController::class, 'viewdiary']);


Route::group([ 'middleware' => 'usercheck'], function(){
    Route::get('/getdiary',  [App\Http\Controllers\DiaryController::class, 'getdiary']);
    Route::get('/diary_delete/{id}',  [App\Http\Controllers\DiaryController::class, 'diary_delete']);
Route::get('/diary_edit/{id}',  [App\Http\Controllers\DiaryController::class, 'edit_diary']);
Route::post('/editdiary/{id}',  [App\Http\Controllers\DiaryController::class, 'editdiary']);
Route::get('/admin_std',  [App\Http\Controllers\AdminController::class, 'students']);
Route::get('admin_edit/{id}',  [App\Http\Controllers\AdminController::class, 'students_edit']);
Route::put('studentupdate/{id}',  [App\Http\Controllers\AdminController::class, 'students_update']);
Route::get('std_delete/{id}',  [App\Http\Controllers\AdminController::class, 'std_delete']);

});


Route::view('teacher_home', 'admin/teacher_home')->middleware('teachercheck');


Route::group( ['middleware'=>'stdcheck'],function () {

    Route::view('std_home', 'admin/std_home');
    Route::get('/stddiary',  [App\Http\Controllers\DiaryController::class, 'stddiary']);


});
});
Auth::routes();
