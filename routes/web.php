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
    $links = config('db_links');
    $comics = config('db');
    $link_footer = config('footer_db');
    $link_fot_mid = config('footer_list_db');
    return view('home', compact('links','comics','link_footer', 'link_fot_mid'));
});



