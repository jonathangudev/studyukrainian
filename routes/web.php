<?php

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

//Static pages:
//home page
//about page
//links page
//lessons page (table of contents)
//grammar table of contents page
//particular lesson
//particular grammar lesson

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/links', function () {
    return view('links');
});

Route::get('/lessons', function () {
    return view('table_of_contents');
});

Route::get('/grammar', function () {
    return view('grammar_toc');
});

Route::get('/premium', function () {
    return view('premium');
});

Route::get('/premium-1', function () {
    return view('premium-1');
});

Route::get('/lessons/{dialogue_number}', function ($dialogue_number) {
    return view('lessons', [
        'dialogue_number' => $dialogue_number
    ]);
});

Route::get('/grammar/{grammar_topic}', function ($grammar_topic) {
    return view('grammar_lesson', [
        'grammar_topic' => $grammar_topic
    ]);
});
//end static pages




//blog routes

Route::get('/blogs', function () {
    return view('blog');
});

Route::get('/blogs/2018/09/29/how-i-learned-ukrainian', function () {
    return view('blog.blog1');
})->name('blog-how-i');;

Route::get('/blogs/2018/09/22/where-to-learn-ukrainian-in-lviv', function () {
    return view('blog.blog2');
})->name('blog-where-to');

Route::get('/blogs/2018/09/15/how-to-learn-ukrainian-online', function () {
    return view('blog.blog3');
})->name('blog-how-to');

//Contact form stuff, get sends to email controller because an email is sent there
Route::get('/contact','EmailController@index');
Route::post('/contact','EmailController@send');



Auth::routes();
Route::get('logout',function(){
    auth()->logout();
    return redirect('/');
});

Route::get('/home', 'HomeController@index')->name('home');
