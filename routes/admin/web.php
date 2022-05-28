<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ActualityController;
use App\Http\Controllers\Admin\PharmacyController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\EmergencyController;
use App\Http\Controllers\Admin\SikController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\BornController;
use App\Http\Controllers\Admin\MaryController;
use App\Http\Controllers\Admin\DedController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;

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


// // Admin 
 Route::group(['prefix' => 'admin', 'as'=>'admin.'],function(){
  Route::namespace('Auth')->middleware('guest')->group(function(){
      // login route
      Route::get('login',[AdminAuthenticatedSessionController::class, 'create'])->name('login');
      Route::post('login',[AdminAuthenticatedSessionController::class, 'store'])->name('adminlogin');
  });

    Route::middleware(['auth', 'admin', 'banned'])->group(function(){
    Route::get('dashboard',[HomeController::class, 'index'])->name('dashboard');
     Route::resource('actuality', ActualityController::class);
     Route::resource('pharmacy', PharmacyController::class);
     Route::resource('school', SchoolController::class);
    Route::resource('emergency', EmergencyController::class);
     Route::resource('sik', SikController::class);
     Route::resource('service', ServiceController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('event', EventController::class);
    Route::resource('born', BornController::class);
    Route::resource('mary', MaryController::class);
    Route::resource('ded', DedController::class);
    Route::resource('job', JobController::class);
    Route::resource('comment', CommentController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('message', MessageController::class);
    Route::resource('user', UserController::class);

    Route::post('/user/{user}', [UserController::class,'baned'])->name('user.baned');
    Route::get('/pharmacie_de_garde', [PharmacyController::class, 'pharDegarde'])->name('pharmacy.degarde');
    Route::get('/services_add/{id}', [ServiceController::class, 'create_service'])->name('service.create_service');
    Route::get('/sick_add/{id}', [SikController::class, 'create_sick'])->name('sick.create_sick');
    Route::put('/subject_approuve/{subject}', [SubjectController::class, 'approuved'])->name('subject.approuve');

  });
 });
