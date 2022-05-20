<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\DedController;
use App\Http\Controllers\Home\JobController;
use App\Http\Controllers\Home\BornController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\MaryController;
use App\Http\Controllers\Home\EventController;
use App\Http\Controllers\Home\SchoolController;
use App\Http\Controllers\Home\ProjectController;
use App\Http\Controllers\Home\SubjectController;
use App\Http\Controllers\Home\PharmacyController;
use App\Http\Controllers\Home\ActualityController;
use App\Http\Controllers\Home\CommentController;
use App\Http\Controllers\Home\EmergencyController;
use App\Http\Controllers\Home\MessageController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => ['auth','banned']], function () {

    Route::resource('/', ActualityController::class);
    Route::get('/profile', [HomeController::class, 'index'])->name('user.dashboard');
    Route::resource('pharmacy', PharmacyController::class);
    Route::resource('emergency', EmergencyController::class);
    Route::resource('school', SchoolController::class);
    Route::resource('event', EventController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('job', JobController::class);
    Route::resource('mary', MaryController::class);
    Route::resource('born', BornController::class);
    Route::resource('ded', DedController::class);
    Route::resource('subject', SubjectController::class);
    Route::resource('message', MessageController::class);

    Route::get('/pharmacie_de_garde', [PharmacyController::class, 'pharDegarde'])->name('pharmacy.degarde');

    //ajax request 
    Route::post('/ajax/{id}/actuaity', [ActualityController::class, 'commant_ajax'])->name('posts.comment');

    Route::post('/ajax/voted', [SubjectController::class, 'voted'])->name('subject.voted');
    Route::post('/ajax/comment', [CommentController::class, 'comment'])->name('comment.comment');
    //ajax request 
    Route::post('/ajax/message', [MessageController::class, 'create_or_return_private_chat'])->name('massage.chat');

    Route::post('/comment_store/{actuality}', [CommentController::class, 'store_comment'])->name('comment.store_comment');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
