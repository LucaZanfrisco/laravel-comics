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
    // dati passati alla view
    $data = [
        // Dati nav-bar
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
        // Dati riguardanti i fumetti
        'comics' => config('db'),
        // Dati della nav del footer top
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
        // Dati dei social
        'social' => [
            [
                'image' => 'resources/img/footer-facebook.png',
                'name' => 'facebook'  
            ],
            [
                'image' => 'resources/img/footer-twitter.png',
                'name' => 'twitter'  
            ],
            [
                'image' => 'resources/img/footer-youtube.png',
                'name' => 'youtube'  
            ],
            [
                'image' => 'resources/img/footer-pinterest.png',
                'name' => 'pinterest'  
            ],
            [
                'image' => 'resources/img/footer-periscope.png',
                'name' => 'periscope'  
            ],
        ]
        ];
    return view('home', $data);
})->name('Homepage');

Route::get('/NEWS', function(){
    $data = [
        // Dati nav-bar
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
        // Dati della nav del footer top
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
        // Dati dei social
        'social' => [
            [
                'image' => 'resources/img/footer-facebook.png',
                'name' => 'facebook'  
            ],
            [
                'image' => 'resources/img/footer-twitter.png',
                'name' => 'twitter'  
            ],
            [
                'image' => 'resources/img/footer-youtube.png',
                'name' => 'youtube'  
            ],
            [
                'image' => 'resources/img/footer-pinterest.png',
                'name' => 'pinterest'  
            ],
            [
                'image' => 'resources/img/footer-periscope.png',
                'name' => 'periscope'  
            ],
        ]
        ];
    return view('news',$data);
})->name('News');
