<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeatureRequestController;
use App\Http\Controllers\MailController;
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
Route::get('/delete_card/{id}',[CardController::class, 'delete_card'])->name('delete_card');
Route::post('/update_card',[CardController::class, 'update_card'])->name('update_card');
Route::get('/profiles', [ProfileController::class,'index'])->name('profiles');
Route::get('/add_profile/{card_id}/{type}', [ProfileController::class,'addProfile'])->name('add_profile');
Route::post('/insert_profile', [ProfileController::class,'insertProfile'])->name('insert_profile');
Route::get('/view_profile/{card_id}', [ProfileController::class,'viewProfile'])->name('view_profile');
Route::get('/edit_profile/{card_id}', [ProfileController::class,'editProfile'])->name('edit_profile');
Route::post('/update_profile', [ProfileController::class,'updateProfile'])->name('update_profile');
Route::get('/faq', [FaqController::class,'faq'])->name('faq');
Route::get('/send', [MailController::class, 'index'])->name('send-email');
Route::get('/customize_card_index/{card_id}/{type}', [CardController::class, 'customize_card_index'])->name('customize_card_index');
Route::get('/validate_email',[CardController::class,'validate_email'])->name('validate_email');
Route::get('/company_user_card/{card_id}/{type}/{is_profile}',[CardController::class,'company_user_card'])->name('company_user_card');
Route::get('continue_card/{card_id}',[CardController::class,'continue_card'])->name('continue_card');
Route::get('visting_card/{card_id}/{type}',[CardController::class,'visting_card'])->name('visting_card');
Route::post('/add_featureRequest',[FeatureRequestController::class,'add_featureRequest'])->name('add_featureRequest');
Route::get('/lists_feature_requets', [FeatureRequestController::class,'index'])->name('lists_feature_requets');


