<?php

// function console_log($output, $with_script_tags = true) {
//     $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
// ');';
//     if ($with_script_tags) {
//         $js_code = '<script>' . $js_code . '</script>';
//     }
//     echo $js_code;
// }

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
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about',[
//     	'articles'=> App\Article::take(3)->latest()->get(),
//     ]);
// });

Route::get('/about','ArticleController@about');

Route::get('posts/{id}','PostsController@show');

Route::post('articles','ArticleController@store');

Route::get('articles/create','ArticleController@create');

Route::get('articles/{article}','ArticleController@show');

Route::get('articles/{article}/edit','ArticleController@edit');

Route::get('articles','ArticleController@page');

Route::put('articles/{article}','ArticleController@update');

Route::delete('articles/{article}','ArticleController@destroy');