<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
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

Route::get('/', function(){
    return view('index');
});


Route::get('/blog/{category?}', [BlogController::class, 'index']);
Route::get('/blog/{category?}/{id?}', [BlogController::class, 'show']);


Route::get('/contact', [FormController::class, 'contact']);
Route::post('/contact', [FormController::class, 'postcontact']);


