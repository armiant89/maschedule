<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\LocationCrudRequest as StoreRequest;
use App\Http\Requests\LocationCrudRequest as UpdateRequest;

class LocationsController extends CrudController
{
    public function setup() {
        $this->crud->setModel("App\Models\Location");
        $this->crud->setRoute("admin/locations");
        $this->crud->setEntityNameStrings(trans('backpack_custom.model_location_sn'), trans('backpack_custom.model_location_pl'));

        $this->crud->addColumn([
            'label' => trans('backpack_custom.location'),
            'name' => "name",
            'type' => "text"
        ]);

        $this->crud->addColumn([
            'label' => trans('backpack_custom.city'),
            'type' => "select",
            'name' => 'city_id',
            'entity' => 'city',
            'attribute' => "name",
            'model' => "App\Models\City",
        ]);

        $this->crud->addField([
            'label' => trans('backpack_custom.location'),
            'name' => 'name',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'label' => trans('backpack_custom.city'),
            'type' => 'select2',
            'name' => 'city_id',
            'entity' => 'city',
            'attribute' => 'name',
            'model' => "App\Models\City"
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