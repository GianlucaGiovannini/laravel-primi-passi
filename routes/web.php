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
    $name = 'Gianluca';
    $surname = 'Giovannini';
    return view('home', compact('name', 'surname'));
})->name('home');

Route::get('/studies', function () {
    $study = ["HTML5", 'CSS3', 'JAVASCRIPT', 'VUEJS', 'PHP', 'MYSQL', 'LARAVEL'];
    return view('studies', compact('study'));
})->name('studies');

