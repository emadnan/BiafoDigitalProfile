<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'contact_us'])->name('contact-us');
Route::get('/pricing', [App\Http\Controllers\PricingController::class, 'pricing'])->name('pricing');
Route::post('/add_card',[CardController::class,'addCard'])->name('add_card');
Route::get('/view_card/{card_id}/{type}', [CardController::class, 'getcard'])->name('view_card');
Route::get('/delete_card/{id}',[CardController::class, 'delete_card'])->name('view_card');
Route::get('/delete_card/{id}',[CardController::class, 'delete_card'])->name('delete_card');
Route::post('/update_card/{card_id}',[CardController::class, 'update_card'])->name('update_card');
Route::get('/profiles', [ProfileController::class,'index'])->name('profiles');
Route::get('/add_profile', [ProfileController::class,'addProfile'])->name('add_profile');
Route::post('/insert_profile', [ProfileController::class,'insertProfile'])->name('insert_profile');

