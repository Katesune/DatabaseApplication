<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends EntityController
{
    protected $model = 'App\Models\Order';

    protected $title = 'orders';

    protected $routeIndex = 'orders.index';
    protected $routeShow = 'orders.show';
    protected $routeCreate = 'orders.create';
    protected $routeEdit = 'orders.edit';
    protected $routeStore = 'orders.store';
    protected $routeDestroy = 'orders.destroy';

    protected $validationRules = [
        'employee_id' => 'required|integer',
        'client_id' => 'required|integer',
        'order_date_end' => 'required',
    ];

    protected $columns = [
        'employee_id' => 'number',
        'client_id' => 'number',
        'order_date' => 'datetime',
        'order_date_end' => 'datetime',
        'order_status' => 'number',
        'punishment' => 'decimal',
        'summ' => 'decimal'
    ];

}
