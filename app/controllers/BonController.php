<?php

class BonController extends \BaseController
{

    public function getBonLast($userId, $count = 10)
    {
        return Response::json(
            Bon::orderBy('created_at', 'desc')
                ->where('user_id','=',$userId)
                ->get()
                ->take($count)
        );
    }

    public function getBonByRange($from, $to)
    {
        return Response::json(
            Bon::where('date', '>=', date('Y-m-d H:i:s', $from))
                ->where('date', '<=', date('Y-m-d H:i:s', $to))
                ->get()
        );
    }

    public function getBonById($id)
    {
        return Response::json(Bon::findOrFail($id));
    }


    public function postInsert($value, $user_id, $date = null)
    {
        $date = Request::get('date');
        if ($date == null) {
            $date = date('Y-m-d H:i:s');
        }
        $bon = new Bon;
        $bon->date = $date;
        $bon->value = Request::get('value');
        $bon->user_id = Request::get('user_id');
        return Response::json($bon->save());
    }

}