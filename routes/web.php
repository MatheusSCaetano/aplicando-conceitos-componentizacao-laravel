<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

/*
Route::view('/', 'welcome', [
    'greeting' => "Hello World",
    'person' =>request('person'),
    'tasks'=>[
        'task1' => 'Go to the store',
        'task2' => 'Go to the gym',
        'task3' => 'Go to the park'
    ]
]);*/

Route::view('/about', 'about',['person' => 'Matheus', 'greeting' => 'Hello World']);

Route::view('/contact', 'contact',['person' => 'José',  'greeting' => 'Hello World']);



Route::get("/", function() {
    $ideas = session()->get('ideasBlas',[]);
    // dd($ideas);
    return view('ideas',[
        'ideas' =>$ideas
    ]);
});


// Route::get("/ideas", function(){
//     return view('ideas');
// });


Route::post("/ideas", function(){
    $idea = request('idea');

    session()->push('ideasBlas',$idea);

    return redirect('/');
});