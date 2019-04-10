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


//blog stuff, need to separate this out into a blog controller and possibly blog model
Route::get('/blog/{blog_topic}', function ($blog_topic) {
  $result = DB::select("select * from blog where title_code = '$blog_topic'", [1]);

  $title_code = ($result[0]->title_code);
  $time_posted = ($result[0]->time_posted);
  $title = ($result[0]->title);
  $body = ($result[0]->body);

  return view('blog',['title_code'=>$title_code,'title'=>$title,'body'=>$body,'time_posted'=>$time_posted]);
});

Route::get('/blog', function () {
  $result = DB::table('blog')->get();
  return view('blog_toc',['result'=>$result]);
});

//Contact form stuff, get sends to email controller because an email is sent there
Route::get('/contact','EmailController@index');
Route::post('/contact','EmailController@send');



Auth::routes();
Route::get('logout',function(){
    auth()->logout();
    return redirect('/');
});

Route::get('/home', 'HomeController@index')->name('home');
