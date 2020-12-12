<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.scss') }}" rel="stylesheet">
        <link href="{{ asset('css/items.scss') }}" rel="stylesheet">
    </head>

    <body class="bg">
    <div class="container font-weight-bold text-uppercase"> 
        
        <div class="row hat">
            <button class="buttonmus col-md-auto" type="button"> </button>
            <h1 class="name col-8">{{trans('tablename.'.$title)}} </h1>
             <a class="align-self-end col go_home_link " href="/">{{ trans('butt.startpage') }}</a>
        </div>
        
        <div class="row">
        @foreach($columns as $column_name => $column_value) 
                    <div class="my_col col column_name"> {{trans('entity.'.$column_name)}} </div>
        @endforeach
        <div class="invisible text-left col-md-auto btn btn-warning my_col"> {{trans('butt.edit')}} </div>
        <div class="invisible text-left col-md-auto btn btn-DARK my_col">  {{trans('butt.delete')}} </div>
        </div>

        @foreach($entities as $entity)
        <div class="row column">
            
            @foreach($columns as $column_name => $column_value) 
                        <div class="text-left col btn btn-dark my_col"> {{$entity->$column_name}} </div>
            @endforeach
            
            <a href="{{route($routes['routeEdit'], $entity->id)}}"
             class="text-left col-md-auto btn btn-warning my_col"> {{trans('butt.edit')}} </a>

            <form class="mb-0" action="{{route($routes['routeShow'], $entity->id)}}" method="POST">
                    @method('delete')
                    {{ csrf_field()}}
                <button type="submit" class="text-left col-md-auto btn btn-DARK my_col"> {{trans('butt.delete')}} </button>
            </form>

        </div>
        @endforeach

        <div class="row text create_butt">
            <a href="{{route($routes['routeCreate'])}}" 
            class=" text-left col-2 align-self-end btn btn-warning my_col"> {{trans('butt.create')}} </a>
        </div>  

    </div>

    </div>  
    </body>
</html>