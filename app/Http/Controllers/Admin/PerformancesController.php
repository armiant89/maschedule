<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\PerformanceCrudRequest as StoreRequest;
use App\Http\Requests\PerformanceCrudRequest as UpdateRequest;

class PerformancesController extends CrudController
{
    public function setup() {
        $this->crud->setModel("App\Models\Performance");
        $this->crud->setRoute("admin/performances");
        $this->crud->setEntityNameStrings(trans('backpack_custom.model_performance_sn'), trans('backpack_custom.model_performance_pl'));
        $this->crud->orderBy('performance_date');

        $this->crud->addColumn([
            'label' => trans('backpack_custom.period'),
            'name' => "period",
            'type' => "model_function",
            'function_name' => 'getPeriodInfo',
        ]);

        $this->crud->addColumn([
            'label' => trans('backpack_custom.date'),
            'type' => 'datetime',
            'name' => 'performance_date'
        ]);


        $this->crud->addField([
            'label' => trans('backpack_custom.period'),
            'type' => 'select2',
            'name' => 'period_id',
            'entity' => 'period',
            'model_function' => 'formatPeriodInfo',
            'model' => "App\Models\Period"
        ]);

        $this->crud->addField([   // date_picker
            'name' => 'performance_date',
            'type' => 'datetime_picker',
            'label' => trans('backpack_custom.date'),
            // optional:
            'datetime_picker_options' => [
                'format' => 'DD/MM/YYYY HH:mm',
                'language' => 'it'
            ]
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