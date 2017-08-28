<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\CityCrudRequest as StoreRequest;
use App\Http\Requests\CityCrudRequest as UpdateRequest;

class CitiesController extends CrudController
{
    public function setup() {
        $this->crud->setModel("App\Models\City");
        $this->crud->setRoute("admin/cities");
        $this->crud->setEntityNameStrings(trans('backpack_custom.model_city_sn'), trans('backpack_custom.model_city_pl'));

        $this->crud->addColumn([
            'label' => trans('backpack_custom.city'),
            'name' => "name",
            'type' => "text"
        ]);

        $this->crud->addColumn([
            'label' => trans('backpack_custom.timezone'),
            'type' => "select",
            'name' => 'timezone_id',
            'entity' => 'timezone',
            'attribute' => "name",
            'model' => "App\Models\Timezone",
        ]);

        $this->crud->addField([
            'label' => trans('backpack_custom.city'),
            'name' => 'name',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => trans('backpack_custom.timezone'),
            'type' => 'select2',
            'name' => 'timezone_id',
            'entity' => 'timezone',
            'attribute' => 'name',
            'model' => "App\Models\Timezone"
        ]);
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}