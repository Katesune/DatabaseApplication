<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkShiftsController extends EntityController
{
    protected $model = 'App\Models\Work_shift';

    protected $title = 'workshifts';

    protected $routeIndex = 'workshifts.index';
    protected $routeShow = 'workshifts.show';
    protected $routeCreate = 'workshifts.create';
    protected $routeEdit = 'workshifts.edit';
    protected $routeStore = 'workshifts.store';
    protected $routeDestroy = 'workshifts.destroy';

    protected $validationRules = [
        'time_start' => 'required',
        'time_end' => 'required',
    ];

    protected $columns = [
        'time_start' => 'datetime',
        'time_end' => 'datetime',
        'salary' => 'decimal'
    ];

}
