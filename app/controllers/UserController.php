<?php

class UserController extends \BaseController {

    public function getAllUsers(){
        return Response::json(User::all());
    }

}