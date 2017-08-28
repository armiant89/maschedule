<?php

namespace App\Http\Controllers\Admin;

use App\Models\Performance;
use App\Models\Period;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\PeriodCrudRequest as StoreRequest;
use App\Http\Requests\PeriodCrudRequest as UpdateRequest;
use Carbon\Carbon;

class PeriodsController extends CrudController
{
    public function setup() {
        $this->crud->setModel("App\Models\Period");
        $this->crud->setRoute("admin/periods");
        $this->crud->setEntityNameStrings(trans('backpack_custom.model_period_sn'), trans('backpack_custom.model_period_pl'));
        $this->crud->orderBy('start');
        $this->crud->enableDetailsRow();
        $this->crud->allowAccess('details_row');

        $this->crud->addColumn([
            'label' => trans('backpack_custom.production'),
            'type' => 'select',
            'name' => 'production_id',
            'entity' => 'production',
            'attribute' => 'name',
            'model' => 'App\Models\Production'
        ]);

        $this->crud->addColumn([
            'label' => trans('backpack_custom.location'),
            'type' => 'select',
            'name' => 'location_id',
            'entity' => 'location',
            'attribute' => 'name',
            'model' => 'App\Models\Location'
        ]);

        $this->crud->addColumn([
            'label' => trans('backpack_custom.city'),
            'name' => "city",
            'type' => "model_function",
            'function_name' => 'getCity',
        ]);

        $this->crud->addColumn([
            'label' => trans('backpack_custom.start'),
            'type' => 'date',
            'name' => 'start'
        ]);

        $this->crud->addColumn([
            'label' => trans('backpack_custom.end'),
            'type' => 'date',
            'name' => 'end'
        ]);

        $this->crud->addField([
            'label' => trans('backpack_custom.production'),
            'type' => 'select2',
            'name' => 'production_id',
            'entity' => 'production',
            'attribute' => 'name',
            'model' => "App\Models\Production"
        ]);

        $this->crud->addField([
            'label' => trans('backpack_custom.location'),
            'type' => 'select2',
            'name' => 'location_id',
            'entity' => 'location',
            'attribute' => 'name',
            'model' => "App\Models\Location"
        ]);

        $this->crud->addField([
            'name' => 'dates', // a unique name for this field
            'start_name' => 'start', // the db column that holds the start_date
            'end_name' => 'end', // the db column that holds the end_date
            'label' => trans('backpack_custom.dates'),
            'type' => 'date_range',
            // OPTIONALS
            'start_default' => Carbon::now(), // default value for start_date
            'end_default' => Carbon::now(), // default value for end_date
            'date_range_options' => [ // options sent to daterangepicker.js
                'timePicker' => false,
                'locale' => ['format' => 'DD/MM/YYYY']
            ]
        ]);

        $this->crud->addField([
            'name' => 'notes',
            'type' => 'textarea',
            'label' => trans('backpack_custom.notes'),
        ]);
    }

    public function showDetailsRow($id)
    {
        $period = Period::find($id);
        if($period->notes) {
            return '<div class="period-details">' . $period->notes . '</div>';
        } else {
            return '<div class="period-details">' . trans('backpack_custom.no_notes') . '</div>';
        }
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