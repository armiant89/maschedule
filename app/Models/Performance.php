<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use CrudTrait;

    protected $table = 'performances';
    protected $fillable = ['period_id', 'performance_date'];
    public $timestamps = true;

    public function period()
    {
        return $this->belongsTo('App\Models\Period');
    }

    public function getPeriodInfo()
    {
        $start = date_create($this->period->start);
        $end = date_create($this->period->end);
        return date_format($start, 'd/m/Y') . ' - ' .
               date_format($end,'d/m/Y') . '   ' .
               $this->period->production->name . ' - ' .
               $this->period->location->name;
    }

    public function getPerformanceClass($next_performance)
    {
        if($next_performance->id == $this->id) {
            return 'next';
        }

        if(Carbon::parse($this->performance_date, $this->period->location->city->timezone->name) > Carbon::now()) {
            return "future";
        } else {
            return "done";
        }
    }
}