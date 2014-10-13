<?php

class BonController extends \BaseController
{

    public function getBonLast($userId, $count = 10)
    {
        return Response::json(
            Bon::where('user_id','=',$userId)
                ->orderBy('id', 'desc')
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


    public function postInsert()
    {
        $userid = Input::get('userid');
        $value = Input::get('value');
        $date = Input::get('date');
        if ($date == null) {
            $date = date('Y-m-d H:i:s');
        }
        if ($value == null) {
            return Response::json(array("error"=>"NO VALUE"));
        }
        if ($userid == null) {
            return Response::json(array("error"=>"NO USERID"));
        }
        $bon = new Bon;
        $bon->date = $date;
        $bon->value = $value;
        $bon->user_id = $userid;
        return Response::json($bon->save());
    }


    public function deleteDelete($bonid)
    {
        return Response::json(Bon::destroy($bonid));
    }

}