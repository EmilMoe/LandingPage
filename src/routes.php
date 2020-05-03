<?php

use Illuminate\Http\Request;
use EmilMoe\LandingPage\Mail\ContactForm;
use Illuminate\Support\Facades\Route;

Route::get('/css/style.css', function() {
    return response(file_get_contents(__DIR__ .'/resources/css/style.min.css'), 200)
        ->header('Content-type', 'text/css; charset=utf-8')
        ->header('X-Content-Type-Options', 'nosniff')
        ->header('Last-Modified', 'Sun, 03 May 2020 10:35:09 GMT');
})->name('landingpage.style');

Route::post('contact', function(Request $request) {
    Illuminate\Support\Facades\Mail::send(new ContactForm($request));

    return redirect()->to('/#contact')->with('sent', true);
})->name('contact');