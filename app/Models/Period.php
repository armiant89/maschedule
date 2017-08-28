<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use CrudTrait;

    protected $table = 'periods';
    protected $fillable = ['production_id', 'location_id', 'start', 'end', 'notes'];
    public $timestamps = true;

    public function production()
    {
        return $this->belongsTo('App\Models\Production');
    }

    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }

    public function performances()
    {
        return $this->hasMany('App\Models\Performance');
    }

    public function getCity()
    {
        return $this->location->city->name;
    }

    public function formatPeriodInfo()
    {
        $start = date_create($this->start);
        $end = date_create($this->end);
        return date_format($start, 'd/m/Y') . ' - ' .
            date_format($end,'d/m/Y') . '   ' .
            $this->production->name . ' - ' .
            $this->location->name;
    }
}