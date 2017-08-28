<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\TimezoneCrudRequest as StoreRequest;
use App\Http\Requests\TimezoneCrudRequest as UpdateRequest;

class TimezonesController extends CrudController
{
    public function setup() {
        $this->crud->setModel("App\Models\Timezone");
        $this->crud->setRoute("admin/timezones");
        $this->crud->setEntityNameStrings(trans('backpack_custom.model_timezone_sn'), trans('backpack_custom.model_timezone_pl'));

        $this->crud->addColumn([
            'label' => trans('backpack_custom.timezone'),
            'name' => "name",
            'type' => "text"
        ]);

        $this->crud->addField([
            'label' => trans('backpack_custom.timezone'),
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