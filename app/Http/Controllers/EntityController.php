<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class EntityController extends Controller
{
    protected $model;

    protected function getModel()
    {
        return $this->model;
    }

    protected $title;

    protected function getTitle()
    {
        return $this->title;
    }

    protected $routeIndex;
    protected $routeShow;
    protected $routeCreate;
    protected $routeEdit;

    protected $validationRules = [
        'name' => 'required',
    ];

    protected function getValidationRules(Request $request)
    {
        return $this->validationRules;
    }

    protected $columns = [
        'name' => 'text',
    ];

    protected function getColumns(Request $request)
    {
        return $this->columns;
    }

    protected function getIndexColumns(Request $request)
    {
        return $this->getColumns($request);
    }

    protected function getCreateColumns(Request $request)
    {
        return $this->getColumns($request);
    }

    protected function getShowColumns(Request $request)
    {
        return $this->getColumns($request);
    }

    protected function getEditColumns(Request $request)
    {
        return $this->getColumns($request);
    }

    protected function getEntityRoutes(Request $request) {

        $routes = [
            'routeIndex' => $this->routeIndex,
            'routeShow' => $this->routeShow,
            'routeCreate' => $this->routeCreate,
            'routeEdit' => $this->routeEdit, 
            'routeStore' => $this->routeStore, 
            'routeDestroy' => $this->routeDestroy
        ];

        return $routes;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = $this->getTitle();
        
        $model = $this->getModel();

        $routes = $this->getEntityRoutes($request);

        $entities = $model::paginate(30);

        $columns = $this->getIndexColumns($request);

        return view('entity.index', compact('model', 'entities', 'columns', 'title', 'routes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $title = $this->getTitle();
        $model = $this->getModel();

        $entity = new $model;

        $columns = $this->getCreateColumns($request);
        $routes = $this->getEntityRoutes($request);

        return view('entity.create', compact('entity', 'columns', 'title', 'routes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->getValidationRules($request));

        $data = $request->all();

        $model = $this->getModel();

        $entity = $model::create($data);

        return redirect(route($this->routeShow, $entity->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $title = $this->getTitle();

        $model = $this->getModel();

        $entity = $model::find($id);

        $columns = $this->getShowColumns($request);

        $routes = $this->getEntityRoutes($request);

        return view('entity.show', compact('entity', 'columns', 'title', 'routes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $title = $this->getTitle();

        $model = $this->getModel();

        $entity = $model::find($id);
        $routes = $this->getEntityRoutes($request);

        $columns = $this->getEditColumns($request);

        return view('entity.edit', compact('entity', 'columns', 'title', 'routes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = $this->getModel();

        $entity = $model::find($id);

        $request->validate($this->getValidationRules($request));

        $entity->update($request->all());

        //return redirect(route($this->routeShow, $entity->id));
        return redirect(route($this->routeIndex));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $model = $this->getModel();

        $entity = $model::find($id);
        $entity->delete();

        return redirect(route($this->routeIndex));
    }
}
