<?php

//We will have only a few Pages, so only one Page Controller
Route::controller('page', 'PageController');


//Here are our Api Calls
Route::group(
    array('prefix' => 'api/v1'),
    function () {
        Route::controller('user', 'UserController');
        Route::controller('bon', 'BonController');
        Route::controller('stats', 'StatsController');
    }
);

//Catch if page is missing
//Not the most beatiful way, but in our Tool it's fine :)
App::missing(function ($exception) {
    if ( Route::getCurrentRoute() != null ) {
        if ( Route::getCurrentRoute()->getParameter('_missing')[0] == 'api' ) {
            return Response::json(array("throw_error"=>"Page unknown"));
        }
    };
    return Redirect::action('PageController@getIndex');
});



