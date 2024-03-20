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


Route::get('/resources',function(){
    return redirect('https://www.folxhealth.com/library/resources-for-trans-youth-and-parents-in-texas-the-us?gclid=CjwKCAjwzN-vBhAkEiwAYiO7oAoLyNbr4a38ByB8F1pikVn8tibNkG0rzG_8pn0gXDxCmaPZ5VZ7UhoCaUsQAvD_BwE');
});



Route::get('/contact',function(){
    return view('contacts');
});


