<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\adminNteacherController;
use App\Http\Controllers\adminviewer;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\myPDFController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\remarkHistoryController;
use App\Http\Controllers\systemController;
use App\Http\Controllers\viewallclearanceController;
use App\Http\Controllers\viewcourseController;
use App\Http\Controllers\viewsectionController;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard',  [dashboardController::class, 'index'])->name('dashboard');

    Route::get('/clearance',  [adminviewer::class, 'index'])->name('clearance');
    Route::get('/admin&teacherviewsection', [adminNteacherController::class , 'index']);
    Route::get('/viewallclearance', [viewallclearanceController::class, 'index'])->name('viewallclearance');
    Route::get('/system',  [systemController::class, 'index'])->name('system');
    Route::get('/viewcourse', [viewcourseController::class, 'index']);
    Route::get('/viewsection', [viewsectionController::class, 'index']);
    Route::get('/', [dashboardController::class, 'index']);
    Route::get('student-clearance',[viewsectionController::class,'student_clearance']);
  
    Route::get('/Remark-History',[remarkHistoryController::class, 'index'])->name('Remark-History');
    Route::get('/import-student', [UsersImport::class, 'model'])->name('import.users');
    Route::post('/upload-student', [UsersImport::class, 'uploadUsers'])->name('upload.users');
    Route::post('/registerStudent', [dashboardController::class, 'registerStudent'])->name('register.student');
    Route::post('/registerUser', [dashboardController::class, 'registerUser']);

    Route::post('/addCourses', [systemController::class, 'addcourse']);
    Route::post('/addClass', [systemController::class, 'addclass']);
    Route::post('/updateCourse', [systemController::class, 'updatecourse']);
    Route::post('/updateClass', [systemController::class, 'updateclass']);

    Route::get('/student/{id}',[dashboardController::class, 'get_student']);
    Route::get('/enrollment/{id}',[dashboardController::class, 'get_enrollment']);

    Route::post('/updatestudent', [dashboardController::class, 'updateStudent']);
    Route::post('/updateAccount', [dashboardController::class, 'updateaccount']);
    Route::post('/ressetAccount', [dashboardController::class, 'ressetaccount']);

    Route::get('/course/{id}',[systemController::class, 'get_course']);
    Route::get('/section/{id}',[systemController::class, 'get_section']);
    Route::get('/account/{id}',[dashboardController::class, 'get_account']);
    Route::get('/reset/{id}',[dashboardController::class, 'get_reset']);

    Route::get('/remark/{student_id}/{semester}/{year}',[viewsectionController::class, 'get_remark']);


    Route::post('/student-clearance-update',[viewsectionController::class,'student_clearanceupdate']);



    Route::get('/generate-pdf/{year}/{section}/{semester}', [myPDFController::class, 'generatePDF']);
    Route::get('/admin-pdf/{year}/{year1}/{class}/{section}/{semester}/{department}', [myPDFController::class, 'generatePDFAdmin']);

    Route::get('/remark-pdf/{year}/{class}/{section}/{semester}', [myPDFController::class, 'generateremark']);
});

require __DIR__.'/auth.php';
