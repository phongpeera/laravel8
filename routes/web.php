<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/homepage', function () {
    return "<h1>This is home page</h1>";
});

Route::get('/blog/{id}', function ($id) {
    return "<h1>This is blog page : {$id} </h1>";
});

Route::get("/blog/{id}/edit", function ($id) {
    return "<h1>This is blog page : {$id} for edit</h1>";
});

Route::get("/product/{a}/{b}/{c}", function ($a, $b, $c) {
    return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>";
});

Route::get("/category/{a?}", function ($a = "mobile") {
    return "<h1>This is category page : {$a} </h1>";
});

Route::get("/myorder/create", function () {
    return "<h1>This is order form page : " . request("username") . "</h1>";
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/greeting', function () {

    $name = 'James';
    $last_name = 'Mars';

    return view('greeting', compact('name', 'last_name'));
});

// Week 2 : Quiz

Route::get("/gallery", function () {
    $name = "Phongpeera 63222390001";
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    $bird = "https://www.hebergementwebs.com/image/cc/cc8811773d2cdbeb4d46e5550fc455fe.jpg/falcon-and-the-winter-soldier-falcon-minifigure-captain-america.jpg";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    $god = "https://www.blackoutx.com/wp-content/uploads/2021/04/Thor.jpg";
    $spider = "https://icdn5.digitaltrends.com/image/spiderman-far-from-home-poster-2-720x720.jpg";

    return view("test/index", compact("name","ant", "bird", "cat", "god", "spider"));
});

Route::get("/gallery/ant", function () {
    $name = "Phongpeera 63222390001";
    $ant = "https://cdn3.movieweb.com/i/article/Oi0Q2edcVVhs4p1UivwyyseezFkHsq/1107:50/Ant-Man-3-Talks-Michael-Douglas-Update.jpg";
    return view("test/ant", compact("name","ant"));
});

Route::get("/gallery/bird", function () {
    $name = "Phongpeera 63222390001";
    $bird = "https://www.hebergementwebs.com/image/cc/cc8811773d2cdbeb4d46e5550fc455fe.jpg/falcon-and-the-winter-soldier-falcon-minifigure-captain-america.jpg";
    return view("test/bird", compact("name","bird"));
});

Route::get("/gallery/cat", function () {
    $name = "Phongpeera 63222390001";
    $cat = "http://www.onyxtruth.com/wp-content/uploads/2017/06/black-panther-movie-onyx-truth.jpg";
    return view("test/cat", compact("name","cat"));
});