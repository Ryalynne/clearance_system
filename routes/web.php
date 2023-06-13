<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\remarkHistoryController;
use App\Http\Controllers\systemController;
use App\Http\Controllers\viewcourseController;
use App\Http\Controllers\viewsectionController;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard',  [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/system',  [systemController::class, 'index'])->name('system');
    Route::get('/viewcourse', [viewcourseController::class, 'index']);
    Route::get('/viewsection', [viewsectionController::class, 'index']);
    Route::get('/', [dashboardController::class, 'index']);
    Route::get('student-clearance',[viewsectionController::class,'student_clearance']);
    Route::get('student-clearance-update',[viewsectionController::class,'student_clearanceupdate']);
    Route::get('/Remark-History',[remarkHistoryController::class, 'index'])->name('Remark-History');
    Route::get('/import-student', [UsersImport::class, 'model'])->name('import.users');
    Route::post('/upload-student', [UsersImport::class, 'uploadUsers'])->name('upload.users');
    Route::post('/registerStudent', [dashboardController::class, 'registerStudent'])->name('register.student');
    Route::post('/registerUser', [dashboardController::class, 'registerUser']);

    Route::post('/addCourses', [systemController::class, 'addcourse']);
    Route::post('/addClass', [systemController::class, 'addclass']);
    Route::post('/updateCourse', [systemController::class, 'updatecourse']);
    
    Route::get('/student/{id}',[dashboardController::class, 'get_student']);
    Route::get('/enrollment/{id}',[dashboardController::class, 'get_enrollment']);

    Route::post('/updatestudent', [dashboardController::class, 'updateStudent']);

    Route::get('/course/{id}',[systemController::class, 'get_course']);
    Route::get('/section/{id}',[systemController::class, 'get_section']);
});

require __DIR__.'/auth.php';
