<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/social support',function(){
    return view('socialSupport');
});



Route::get('/contact',function(){
    return view('contacts');
});
