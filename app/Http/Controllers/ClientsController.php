<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends EntityController
{
    protected $model = 'App\Models\Client';

    protected $title = 'clients';

    protected $routeIndex = 'clients.index';
    protected $routeShow = 'clients.show';
    protected $routeCreate = 'clients.create';
    protected $routeEdit = 'clients.edit';
    protected $routeStore = 'clients.store';
    protected $routeDestroy = 'clients.destroy';

    protected $validationRules = [
        'firstname' => 'required|max:50',
        'lastname' => 'required|max:50', 
        'phone' => 'max:20'
    ];

    protected $columns = [
        'firstname' => 'text',
        'lastname' => 'text',
        'phone' => 'text'
    ];

}
