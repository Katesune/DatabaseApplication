<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmsController extends EntityController
{
    protected $model = 'App\Models\Film';

    protected $title = 'films';

    protected $routeIndex = 'films.index';
    protected $routeShow = 'films.show';
    protected $routeCreate = 'films.create';
    protected $routeEdit = 'films.edit';
    protected $routeStore = 'films.store';
    protected $routeDestroy = 'films.destroy';

    protected $validationRules = [
        'name' => 'required|max:50',
        'author' => 'required|max:80',
        'genre' => 'required|max:50',
        'quantity' => 'required',
    ];

    protected $columns = [
        'name' => 'text',
        'author' => 'text',
        'genre' => 'text',
        'quantity' => 'number',
        'cost' => 'decimal'
    ];

}
