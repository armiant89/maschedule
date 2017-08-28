<?php

namespace App\Http\Controllers\Site;

use \App\Http\Controllers\Controller;
use \App\Models\Performance;
use App\Models\Period;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $periods = Period::where('end', '>=', Carbon::now())->get();
        $now_date = Carbon::now();
        $next_performance_date = null;
        $next_performance = Performance::where('performance_date', '>=', $now_date)
                                         ->orderBy('performance_date', 'desc')
                                         ->first();

        if(isset($next_performance)) {
            $timezone = $next_performance->period->location->city->timezone->name;
            $next_performance_date = new Carbon($next_performance->performance_date, $timezone);
        }

        return view('home.index')->with('periods', $periods)
                                       ->with('next_performance', $next_performance)
                                       ->with('now_date', $now_date)
                                       ->with('next_performance_date', $next_performance_date);
    }
}