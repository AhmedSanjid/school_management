<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdminController;

Route::middleware(['auth','role:student'])->group(function () {
    Route::get('/student/profile', [StudentController::class, 'profile']);
    Route::post('/student/request-attendance', [StudentController::class, 'requestAttendance'])->name('students.requestAttendance');
});

Route::middleware(['auth','role:teacher'])->group(function () {
    Route::get('/teacher/attendance-list', [TeacherController::class, 'attendanceList']);
    Route::post('/teacher/approve-attendance', [TeacherController::class, 'approveAttendance'])->name('teachers.approveAttendance');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/create-student', [AdminController::class, 'createStudent']);
    Route::get('/admin/create-teacher', [AdminController::class, 'createTeacher']);
    Route::get('/admin/users', [AdminController::class, 'viewUsers']);
});
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
