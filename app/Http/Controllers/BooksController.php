<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends EntityController
{
    protected $essence = 'books.';

    protected $model = 'App\Models\Book';

    protected $title = 'Книги';

    protected $routeIndex = 'books.index';
    protected $routeShow = 'books.show';
    protected $routeCreate = 'books.create';
    protected $routeEdit = 'books.edit';
    protected $routeStore = 'books.store';
    protected $routeDestroy = 'books.destroy';

    protected $validationRules = [
        'name' => 'required',
    ];

    protected $columns = [
        'name' => 'text',
        'year' => 'number',
        'isbn' => 'textarea',
    ];

}
