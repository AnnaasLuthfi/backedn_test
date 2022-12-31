<?php

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

Route::get('/', [FormController::class,'home']);
Route::get('/add_form', [FormController::class,'createForm']);
Route::post('/send_form', [FormController::class,'sendForm']);

// Route::get('/detail_form/{cust_id}', [FormController::class,'detail']);


