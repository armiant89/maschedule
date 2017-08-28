<?php namespace App\Http\Requests;

use App\Http\Requests;
use \Backpack\CRUD\app\Http\Requests\CrudRequest;

class TimezoneCrudRequest extends CrudRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        ];
    }

}