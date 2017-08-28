<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use CrudTrait;

    protected $table = 'cities';
    protected $fillable = ['name', 'timezone_id'];
    public $timestamps = true;

    public function locations()
    {
        return $this->hasMany('App\Models\Location');
    }

    public function timezone()
    {
        return $this->belongsTo('App\Models\Timezone');
    }
}