<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends EntityController
{
    protected $model = 'App\Models\Schedule';

    protected $title = 'schedule';

    protected $routeIndex = 'schedule.index';
    protected $routeShow = 'schedule.show';
    protected $routeCreate = 'schedule.create';
    protected $routeEdit = 'schedule.edit';
    protected $routeStore = 'schedule.store';
    protected $routeDestroy = 'schedule.destroy';

    protected $validationRules = [
        'timework_id' => 'required|integer',
        'employee_id' => 'required|integer',
    ];

    protected $columns = [
        'timework_id' => 'number',
        'employee_id' => 'number',
        'salary' => 'decimal'
    ];

}