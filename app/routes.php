<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Starseite
Route::get(
    '/',
    function () {
        return View::make('hello');
    }
);


//Wichtige Models
Route::model('user', 'User');
Route::model('bon', 'Bon');


Route::group(
    array('prefix' => 'api/v1'),
    function () {
        Route::controller('user', 'UserController');
        Route::controller('bon', 'BonController');
    }
);

