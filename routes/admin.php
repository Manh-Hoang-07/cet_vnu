<?php

use App\Http\Controllers\Admin\Auth\LoginAdminController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\ExamsController;
use Illuminate\Support\Facades\Route;

// Route::match(['get', 'post'], '/admin/login', [LoginAdminController::class, 'login'])->name('admin.login');
Route::middleware('auth:admin')->group(function (){
    Route::get('/', [HomeAdminController::class, 'index'])->name('dashboard');

    //sự kiện
    Route::get('/add-event', [EventsController::class, 'add_event'])->name('add.event');
    Route::post('/save-event', [EventsController::class, 'save_event'])->name('save.event');
    Route::post('/update-event/{id}', [EventsController::class, 'update_event'])->name('update.event');
    Route::get('/all-events', [EventsController::class, 'all_events'])->name('all.events');
    Route::get('/edit-event/{id}', [EventsController::class, 'edit_event'])->name('edit.event');
    Route::get('/delete-event/{id}', [EventsController::class, 'delete_event'])->name('delete.event');

    //kỳ thi
    Route::get('/add-exam', [ExamsController::class, 'add_exam'])->name('add.exam');
    Route::post('/save-exam', [ExamsController::class, 'save_exam'])->name('save.exam');
    Route::post('/update-exam/{id}', [ExamsController::class, 'update_exam'])->name('update.exam');
    Route::get('/all-exams', [ExamsController::class, 'all_exams'])->name('all.exams');
    Route::get('/edit-exam/{id}', [ExamsController::class, 'edit_exam'])->name('edit.exam');
    Route::get('/delete-exam/{id}', [ExamsController::class, 'delete_exam'])->name('delete.exam');


    Route::get('/admin/logout', [EventsController::class, 'logout_admin'])->name('admin.logout');
});