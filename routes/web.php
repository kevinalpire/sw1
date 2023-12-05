<?php

use App\Http\Controllers\AulaController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\ColegioController;

   


//	COLEGIO										
Route::get('/colegios',[ColegioController::class, 'index'])->name('colegios.index');
Route::get('/colegios/create', [ColegioController::class, 'create'])->name('colegios.create');
Route::post('/colegios', [ColegioController::class, 'store'])->name('colegios.store');
Route::get('/colegios/{id}/edit', [ColegioController::class, 'edit'])->name('colegios.edit');
Route::put('/colegios/{id}', [ColegioController::class, 'update'])->name('colegios.update');
Route::delete('/colegios/{id}', [ColegioController::class, 'destroy'])->name('colegios.destroy');
// 	AULA			
Route::get('/aulas',[AulaController::class, 'index'])->name('aulas.index');
Route::get('/aulas/create', [AulaController::class, 'create'])->name('aulas.create');
Route::post('/aulas', [AulaController::class, 'store'])->name('aulas.store');
Route::get('/aulas/{id}', [AulaController::class, 'show'])->name('aulas.show');
Route::get('/aulas/{id}/edit', [AulaController::class, 'edit'])->name('aulas.edit');
Route::put('/aulas/{id}', [AulaController::class, 'update'])->name('aulas.update');

Route::delete('/aulas/{id}', [AulaController::class, 'destroy'])->name('aulas.destroy');



Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});