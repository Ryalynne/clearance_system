<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\remarkHistoryController;
use App\Http\Controllers\viewsectionController;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard',  [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/bsit', function () {return view('viewcourse');});
    Route::get('/bshm', function () {return view('viewcourse');});
    Route::get('/bstm', function () {return view('viewcourse');});
    Route::get('/bsais', function () {return view('viewcourse');});
    Route::get('/bsba', function () {return view('viewcourse');});
    Route::get('/act', function () {return view('viewcourse');});

    Route::get('/abm', function () {return view('viewcourse');});
    Route::get('/stem', function () {return view('viewcourse');});
    Route::get('/humss', function () {return view('viewcourse');});
    Route::get('/ga', function () {return view('viewcourse');});
    Route::get('/it', function () {return view('viewcourse');});
    Route::get('/to', function () {return view('viewcourse');});
    Route::get('/ca', function () {return view('viewcourse');});

    Route::get('/viewsection', [viewsectionController::class, 'index']);
    Route::get('/', [dashboardController::class, 'index']);
    Route::get('student-clearance',[viewsectionController::class,'student_clearance']);
    Route::get('student-clearance-update',[viewsectionController::class,'student_clearanceupdate']);
    Route::get('/Remark-History',[remarkHistoryController::class, 'index'])->name('Remark-History');
    Route::get('/import-student', [UsersImport::class, 'model'])->name('import.users');
    Route::post('/upload-student', [UsersImport::class, 'uploadUsers'])->name('upload.users');
    Route::post('/registerStudent', [dashboardController::class, 'registerStudent'])->name('register.student');
    Route::post('/registerUser', [dashboardController::class, 'registerUser']);
});

require __DIR__.'/auth.php';
