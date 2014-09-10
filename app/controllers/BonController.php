<?php

class BonController extends \BaseController {

    public function getLastBons($count = 10 ){
        return Response::json(User::orderBy('created_at','desc')->get()->take($count));
    }

    public function getInsert($value,$user_id,$date = null ){
        if ( $date == null ) {
            $date = date( 'Y-m-d H:i:s' );
        }
        $bon = new Bon;
        $bon->date = $date;
        $bon->value = $value;
        $bon->user_id = $user_id;
        return var_dump($bon->save());
    }

    public function postInsert(){
        $date = Request::get('date') ;
        if ( $date == null ) {
            $date = date( 'Y-m-d H:i:s' );
        }
        $bon = new Bon;
        $bon->date = $date;
        $bon->value = Request::get('value');
        $bon->user_id = Request::get('user_id');
        return var_dump($bon->save());
    }

}