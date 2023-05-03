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

// Rotta alla Homepage
Route::get('/', function () {
    // dati passati alla view
    
    $comics = config('db.comics');
    $nav = config('db.nav');
    $footerTop = config('db.footerTop');
    $social = config('db.social');

    return view('home', compact('comics','nav','footerTop','social'));
})->name('COMICS');

// Rotta alla pagina news
Route::get('/NEWS', function(){
    $comics = config('db.comics');
    $nav = config('db.nav');
    $footerTop = config('db.footerTop');
    $social = config('db.social');

    return view('news',compact('comics','nav','footerTop','social'));
})->name('NEWS');

// Redirezione alla homepage al click su COMICS
Route::redirect('COMICS','/',301);

Route::get('comic/{index}', function($index){

    $comics = config('db.comics');
    $nav = config('db.nav');
    $footerTop = config('db.footerTop');
    $social = config('db.social');

    if($index > count($comics) - 1){
        abort(400);
    }

    $comic_detail = $comics[$index];
    return view('comics', compact('comic_detail','nav','footerTop','social'));
})->name('COMICS')->where('index', '[0-9]+');
