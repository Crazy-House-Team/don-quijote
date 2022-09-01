<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {return view('home');});
//Route::get('/', [EventController::class, 'index'])->name('home');

Auth::routes();

//Any User
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('show/{id}', [HomeController::class, 'show'])->name('detail');
    Route::get('/old', [HomeController::class, 'old'])->name('pastEvents');

//Only logged Users
Route::group([
    'middleware' => 'auth',
], function () {
    Route::get('suscribe/{id}', [HomeController::class, 'suscribe'])->name('suscribe');
    Route::get('unsuscribe/{id}', [HomeController::class, 'unsuscribe'])->name('unsuscribe');
    Route::get('suscriptions', [HomeController::class, 'getSuscriptions'])->name('suscriptions');
});

// Only Admins
Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
],function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::post('/',[AdminController::class, 'store'])->name('storeEvent');
    Route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('delete');
    Route::get('/create',[AdminController::class, 'create'])->name('createEvent');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('editEvent');
    Route::patch('/event/{id}', [AdminController::class, 'update'])->name('updateEvent');


});

