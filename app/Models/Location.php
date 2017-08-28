<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use CrudTrait;

    protected $table = 'locations';
    protected $fillable = ['city_id', 'name'];
    public $timestamps = true;

    public function city()
    {
        return $this->belongsTo('App\Models\City', 'city_id', 'id');
    }
}