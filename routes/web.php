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

    $data = [
        'nav' => [
            'CHARACTERS',
            'COMICS',
            'MOVIES',
            'TV',
            'GAMES',
            'COLLECTIBLES',
            'VIDEOS',
            'FANS',
            'NEWS',
            'SHOP'
        ],
        'comics' => config('db'),
        'footerTop' => [
                [
                    'image' => 'resources/img/buy-comics-digital-comics.png',
                    'name' => 'DIGITAL COMICS'  
                ],
                [
                    'image' => 'resources/img//buy-comics-merchandise.png',
                    'name' => 'DC MERCHANDISE' 
                ],
                [
                    'image' => 'resources/img/buy-comics-subscriptions.png',
                    'name' => 'SUBSCRIPTION'  
                ],
                [
                    'image' => 'resources/img/buy-comics-shop-locator.png',
                    'name' => 'COMIC SHOP LOCATOR'
                ],
                [
                    'image' => 'resources/img/buy-dc-power-visa.svg',
                    'name' =>  'DC POWER VISA' 
                ]
            ],
        ];
    return view('home', $data);
});
