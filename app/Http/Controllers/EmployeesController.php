<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends EntityController
{
    protected $model = 'App\Models\Employee';

    protected $title = 'employees';

    protected $routeIndex = 'employees.index';
    protected $routeShow = 'employees.show';
    protected $routeCreate = 'employees.create';
    protected $routeEdit = 'employees.edit';
    protected $routeStore = 'employees.store';
    protected $routeDestroy = 'employees.destroy';

    protected $validationRules = [
        'firstname' => 'required|max:50',
        'lastname' => 'required|max:50', 
        'phone' => 'max:20'
    ];

    protected $columns = [
        'firstname' => 'text',
        'lastname' => 'text',
        'salary' => 'decimal',
        'phone' => 'text'
    ];

}
