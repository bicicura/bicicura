<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/viejo', function () {
    return view('welcome');
});

Route::get('/detailviejo', function () {
    return view('detail');
});

Route::get('/', function () {
    return Inertia::render('Home', [
        'projects' => [
            'street' => [
                'title' => 'Street Agency', 
                'tech' => ['0' => 'Laravel', '1' => 'Livewire', '2' => 'Alpine JS', '3' => 'MySQL', '4' => 'Tailwind'],
                'thumbnail' => 'streetThumbnail.webp',
                'about' => 'An agency which struggles to find a new generation of models which prioratize and celebrates diversity, authentisiy and character.',
                'pathname' => 'street-agency'
            ],
            'hans' => [
                'title' => 'Hans Creative',
                'tech' => ['0' => 'PHP', '1' => 'JavaScript', '2' => 'MySQL', '3' => 'CSS', '4' => 'HTML'],
                'thumbnail' => 'hansThumbnail.webp',
                'about' => 'A creative agency and graphic design studio based in Buenos Aires & Madrid. Passionate about creating and empowering brand identities.',
                'pathname' => 'hans-creative'
            ],
            'saigon' => [
                'title' => 'Saigon',
                'tech' => ['0' => 'Laravel', '1' => 'Livewire', '2' => 'Alpine JS', '3' => 'MySQL', '4' => 'Tailwind'],
                'thumbnail' => 'saigonThumbnail.jpg',
                'about' => 'Saigón has a creative team devoted to casting design and production for local and global projects.',
                'pathname' => 'saigon'
            ],
            ]
        ]);
});

Route::get('/hans-creative', function () {
    return Inertia::render('Hans');
});

Route::get('/saigon', function () {
    return Inertia::render('Saigon');
});

Route::get('/street-agency', function () {
    return Inertia::render('Street', ['project' => [
        'title' => 'Street Agency', 
        'tech' => ['0' => 'Laravel', '1' => 'Livewire', '2' => 'Alpine JS', '3' => 'MySQL', '4' => 'Tailwind'],
        'thumbnail' => 'streetThumbnail.webp',
        'about' => 'An agency which struggles to find a new generation of models which prioratize and celebrates diversity, authentisiy and character.',
        'pathname' => 'street-agency',
        ]
    ]);
});
