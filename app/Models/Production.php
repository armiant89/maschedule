<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use CrudTrait;

    protected $table = 'productions';
    protected $fillable = ['name'];
    public $timestamps = true;

    public function periods()
    {
        return $this->belongsToMany('App\Models\Period');
    }
}