<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/',[AppController::class,'index']);

Route::get('/insert',[AppController::class,'create'])->name('insert');
Route::post('/insertData',[AppController::class,'storeData'])->name('store');
Route::get('/delete{id}',[AppController::class,'delete'])->name('delete');
Route::put('/update{id}', [AppController::class, 'updateData'])->name('update.students');
Route::get('/getData{id}',[AppController::class,'getData'])->name('getData');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
