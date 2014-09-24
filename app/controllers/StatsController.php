<?php

class StatsController extends \BaseController
{

    public function getDateRangeStats($date_start, $date_end)
    {

        $bons =
            Bon::select('user_id','value')
                ->whereRaw('date >= "'.$date_start.'"')
                ->whereRaw('date <= "'.$date_end.'"')
                ->orderBy('date', 'desc')
                ->get()
                ->take(10);
        $queries = DB::getQueryLog();
        return Response::json($bons);

    }

}