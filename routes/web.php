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

Route::get('/', function () {

    /*
    $tasks = [
        'Go to work',
        'Go Home',
        'Repeat'
    ];

    return view('welcome', [
        'tasks' => $tasks
        'somethingElse' => 'RandomText'
    ]);
    */

    // ---------- This ^^^ is same as below ---------- //
    /*
    $tasks = [
        'Go to work',
        'Go Home',
        'Repeat'
    ];

    return view('welcome')->withTasks($tasks)->withSomethingElse('RandomText');
    */

    // ---------- This ^^^ is same as below ---------- //
    return view('welcome').with([
        'tasks' => [
            'Go to work',
            'Go Home',
            'Repeat'
        ],
        'somethingElse' => 'RandomText'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});