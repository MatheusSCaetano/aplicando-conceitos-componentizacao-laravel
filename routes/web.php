<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::view('/', 'welcome', [
    'greeting' => "Hello World",
    'person' =>request('person'),
]);

/*Route::get('/about', function () {
    return view('about');
});*/
Route::view('/about', 'about',['person' => 'Matheus', 'greeting' => 'Hello World']);

/*Route::get('/contact', function () {
    return view('contact');
});*/
Route::view('/contact', 'contact',['person' => 'José',  'greeting' => 'Hello World']);
