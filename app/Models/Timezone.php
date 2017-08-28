<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    use CrudTrait;

    protected $table = 'timezones';
    protected $fillable = ['name'];
    public $timestamps = true;

    public function cities()
    {
        return $this->hasMany('App\Models\City');
    }
}