<?php

use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\User\InfomationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Chức năng không cần tài khoản
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [InfomationController::class, 'cetinfo'])->name('cetinfo1');
Route::get('/cetinfo', [InfomationController::class, 'cetinfo'])->name('cetinfo');
Route::get('/cetevent', [InfomationController::class, 'cetevent'])->name('cetevent');
Route::get('/cetexam', [InfomationController::class, 'cetexam'])->name('cetexam');
Route::get('/registration', [LoginController::class, 'registration'])->name('registration');
Route::get('/event-detail/{id}', [InfomationController::class, 'event_detail'])->name('event.detail');
Route::post('/save-registration', [LoginController::class, 'save_registration'])->name('saveRegistration');

//Chức năng cho user
Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');
Route::middleware('auth')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
	Route::get('/update-info', [InfomationController::class, 'update_info'])->name('updateInfo');
	Route::post('/save-info/{id}', [InfomationController::class, 'save_info'])->name('saveInfo');    
});

//Chức năng cho admin

