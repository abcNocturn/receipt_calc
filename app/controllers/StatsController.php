<?php

class StatsController extends \BaseController
{

    public function getDateRangeDiff($user1,$user2,$date_start, $date_end)
    {
        $bons[$user1] = Bon::select(DB::raw('user_id, SUM(value) as sum_value,users.name'))
            ->leftJoin('users', function($join) {
                $join->on('bons.user_id', '=', 'users.id');
            })
            ->whereRaw('date >= "'.$date_start.'"')
            ->whereRaw('date <= "'.$date_end.'"')
            ->whereRaw('user_id = "'.$user1.'"')
            ->get();
        $bons[$user2] = Bon::select(DB::raw('user_id, SUM(value) as sum_value,users.name'))
            ->leftJoin('users', function($join) {
                $join->on('bons.user_id', '=', 'users.id');
            })
            ->whereRaw('date >= "'.$date_start.'"')
            ->whereRaw('date <= "'.$date_end.'"')
            ->whereRaw('user_id = "'.$user2.'"')
            ->get();

        $bonresult = array();
        return Response::json($bons);

    }

}