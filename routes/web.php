<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentProfileController;

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

Route::middleware(['admin_auth'])->group(function () {
    Route::redirect('/', 'loginPage');
    Route::get('/loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');
    Route::get('/registerPage', [AuthController::class, 'registerPage'])->name('auth#registerPage');
});



// After AUthentication

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    //admin account
    Route::group(['prefix' => 'admin', 'middleware' => 'admin_auth'], function () {
        Route::get('/index', [AuthController::class, 'showIndex'])->name('admin#dashboard');
        Route::get('/password/change', [ProfileController::class, 'changePasswordPage'])->name('admin#changePasswordPage');
        Route::post('/change/password', [ProfileController::class, 'changePassword'])->name('admin#changePassword');
        Route::get('/profile', [ProfileController::class, 'showProfile'])->name('admin#showProfile');
        Route::post('/update/{id}', [ProfileController::class, 'updateProfile'])->name('admin#updateProfile');

        Route::get('/student', [StudentController::class, 'showStudentBatch'])->name('admin#showStudents');
        Route::get('/student/add', [StudentController::class, 'showAddStudent'])->name('admin#addStudent');
        Route::post('/add/students', [StudentController::class, 'addStudent'])->name('admin#studentAddTodb');
    });


    //user
    //home
    Route::group(['prefix' => 'user', 'middleware' => 'user_auth'], function () {

        Route::get('/index', [ClientController::class, 'loadIndex'])->name('student#index');
        Route::get('/exam/score', [ClientController::class, 'loadScore'])->name('student#score');
        Route::get('/exam/take', [ClientController::class, 'loadExam'])->name('student#exam');
        Route::get('/exam/practice', [ClientController::class, 'loadPractice'])->name('student#practice');
        Route::get('/password/change', [StudentProfileController::class, 'changePasswordPage'])->name('student#changePasswordPage');
        Route::post('/change/password', [StudentProfileController::class, 'changePassword'])->name('student#changePassword');
        Route::get('/profile', [StudentProfileController::class, 'showProfile'])->name('student#profile');
        Route::get('/edit', [StudentProfileController::class, 'showEdit'])->name('student#showEdit');
        Route::post('/update/{id}', [StudentProfileController::class, 'updateProfile'])->name('student#updateProfile');
    });
});
