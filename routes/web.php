<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
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


Route::get('/',[FrontController::class, 'index']);
Route::get('/AboutUs',[FrontController::class,'aboutus']);
Route::get('/ContactUs',[FrontController::class,'contactus']);

Route::get('/Events',[FrontController::class,'events']);
Route::get('/7QUESTS',[FrontController::class,'event_1']);
Route::get('/HaloNight',[FrontController::class,'event_2']);
Route::get('/Orientation',[FrontController::class,'orientation']);

Route::get('/test',[FrontController::class,'test']);


/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
