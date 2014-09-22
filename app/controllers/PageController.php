<?php

class PageController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    protected $layout = 'layouts.standard';

    public function getIndex()
    {
        $this->layout->content = View::make('pages.start');
    }

    public function getStatistics()
    {
        $this->layout->content = View::make('pages.getStatistics');
    }

    public function getInsertBon()
    {
        $this->layout->content = View::make('pages.insertBon');
    }

}
