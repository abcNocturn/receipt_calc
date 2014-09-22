<?php

class UserController extends \BaseController
{

    public function getAllUsers()
    {
        return Response::json(User::all());
    }

    //Long Loadingtimes in the future :(
    public function getAllUsersWithBons()
    {
        return Response::json(User::with('bons')->get());
    }

}