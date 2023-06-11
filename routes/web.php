<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\remarkHistoryController;
use App\Http\Controllers\viewsectionController;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Route;


Route::get('/sti.baliuag/admin/it-comlab', [adminController::class, 'index']);
Route::get('/import-student', [UsersImport::class, 'model'])->name('import.users');
Route::post('/upload-student', [UsersImport::class, 'uploadUsers'])->name('upload.users');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/bsit', function () {return view('viewcourse');});
    Route::get('/bshm', function () {return view('viewcourse');});
    Route::get('/bstm', function () {return view('viewcourse');});
    Route::get('/bsais', function () {return view('viewcourse');});
    Route::get('/bsba', function () {return view('viewcourse');});
    Route::get('/act', function () {return view('viewcourse');});
    Route::get('/viewsection', [viewsectionController::class, 'index']);
    Route::get('/', function () {return view('dashboard');});
    Route::get('student-clearance',[viewsectionController::class,'student_clearance']);
    Route::get('student-clearance-update',[viewsectionController::class,'student_clearanceupdate']);
    Route::get('/Remark-History',[remarkHistoryController::class, 'index'])->name('Remark-History');
   
});

require __DIR__.'/auth.php';
