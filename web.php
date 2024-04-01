<?php

use App\Http\Controllers\distownController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\test1Controller;
use App\Http\Controllers\test2Controller;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Test1
    //player List page
    Route::get('/test1', [test1Controller::class, 'showTest1'])->name('test1index');
    //insert page
    Route::get('/test1Upload', [test1Controller::class, 'getGenPosDist'])->name('test1insertpage');
    //insert function(action)
    Route::post('test1add', [test1Controller::class, 'insertTest1'])->name('test1POST');
    //delete
    Route::get('test1delete/{id}', [test1Controller::class, 'removeTest1']);
    //edit(update)
    Route::get('test1Update/{id}', [test1Controller::class, 'editShowTest1']);
    Route::POST('test1_edit/{id}', [test1Controller::class, 'UpdateTest1']);

    //Test2
    //player List page
    Route::get('/test2', [test2Controller::class, 'showTest2'])->name('test2index');
    //insert page
    Route::get('/test2Upload', [test2Controller::class, 'getGenPosDist'])->name('test2insertpage');
    //insert function(action)
    Route::post('test2add', [test2Controller::class, 'insertTest2'])->name('test2POST');
    //delete
    Route::get('test2delete/{id}', [test2Controller::class, 'removeTest2']);
    //edit(update)
    Route::get('test2Update/{id}', [test2Controller::class, 'editShowTest2']);
    Route::POST('test2_edit/{id}', [test2Controller::class, 'UpdateTest2']);

    //multi-dependent 
    // Route::get('dropdown',[DropDownController::class,'index']);
    // Route::post('api/fetch-state',[DropDownController::class,'fatchState']);
    // Route::post('api/fetch-cities',[DropDownController::class,'fatchCity']);
    
    Route::post('townns', [distownController::class, 'getDists']);



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
