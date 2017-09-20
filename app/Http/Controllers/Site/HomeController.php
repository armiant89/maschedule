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
        $now_date = Carbon::now();
        $now_date->subDay();
        $periods = Period::whereDate('end', '>=', $now_date)->get();
        $next_performance = Performance::whereDate('performance_date', '>', $now_date)
                                         ->orderBy('performance_date', 'asc')
                                         ->first();

        if($next_performance) {
            $timezone = $next_performance->period->location->city->timezone->name;
            $diff_in_days = $now_date->subDay()->diffInDays(Carbon::parse($next_performance->performance_date, $timezone));
            $diff_for_humans = Carbon::parse($next_performance->performance_date, $timezone)->diffForHumans($now_date->subDay(), true);

            return view('home.index')->with('periods', $periods)
                ->with('next_performance', $next_performance)
                ->with('now_date', $now_date)
                ->with('diff_in_days', $diff_in_days)->with('diff_for_humans', $diff_for_humans);
        }

        return view('home.index')->with('periods', $periods)
                                       ->with('now_date', $now_date);
    }
}