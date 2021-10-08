<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
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

Route::get('/url-parser', [Controller::class,'sampleUrlParserExample']);

Route::get('/', [BlogController::class,'index'])->name('home');
Route::get('/admin', [BlogController::class,'admin'])->name('blog-admin');

Route::prefix('blogs')->name('blogs.')->group( function(){
    Route::post('/', [BlogController::class,'create'])->name('create');
});
