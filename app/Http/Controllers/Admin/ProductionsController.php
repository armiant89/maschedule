<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\ProductionCrudRequest as StoreRequest;
use App\Http\Requests\ProductionCrudRequest as UpdateRequest;

class ProductionsController extends CrudController
{
    public function setup() {
        $this->crud->setModel("App\Models\Production");
        $this->crud->setRoute("admin/productions");
        $this->crud->setEntityNameStrings(trans('backpack_custom.model_production_sn'), trans('backpack_custom.model_production_pl'));

        $this->crud->addColumn([
            'label' => trans('backpack_custom.production'),
            'name' => "name",
            'type' => "text"
        ]);

        $this->crud->addField([
            'label' => trans('backpack_custom.production'),
            'name' => 'name',
            'type' => 'text',
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