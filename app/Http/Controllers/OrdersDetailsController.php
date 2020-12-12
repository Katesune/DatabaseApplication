<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersDetailsController extends EntityController
{
    protected $model = 'App\Models\Order_details';

    protected $title = 'ordersdetails';

    protected $routeIndex = 'ordersdetails.index';
    protected $routeShow = 'ordersdetails.show';
    protected $routeCreate = 'ordersdetails.create';
    protected $routeEdit = 'ordersdetails.edit';
    protected $routeStore = 'ordersdetails.store';
    protected $routeDestroy = 'ordersdetails.destroy';

    protected $validationRules = [
        'order_id' => 'required|integer',
        'film_id' => 'required|max:50|integer',
    ];

    protected $columns = [
        'order_id' => 'number',
        'film_id' => 'number',
        'count_film' => 'number'
    ];

}
