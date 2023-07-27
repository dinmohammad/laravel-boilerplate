<?php

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
    return view('frontend.pages.Home.home');
});


Route::get('/team', function () {
    return view('frontend.pages.Team.team');
});

Route::get('/advisor', function () {
    return view('frontend.pages.Advisor.advisor');
});

Route::get('/faq', function () {
    return view('frontend.pages.Faq.faq');
});

Route::get('/contact', function () {
    return view('frontend.pages.Contact.contact');
});

