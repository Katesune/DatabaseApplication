<html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.scss') }}" rel="stylesheet">
    <link href="{{ asset('css/items.scss') }}" rel="stylesheet">
</head>

<body class="bg">
<div class="container font-weight-bold text-uppercase">

    @include('entity.hat')

    <form action="{{route($routes['routeShow'], $entity->id)}}" method="POST">
        @method('put')
        {{ csrf_field()}}
        
        </inpit>
        @foreach($columns as $column_name => $column_type)

        <div class="row column_part">
                <div class="col-md-7 "> {{ trans('entity.'.$column_name) }} </div>
        </div>

        <div class="row">
                @include('entity.fields.'.$column_type)
    
        @endforeach

        <div class="row">

            <button class="text-left col-3 btn btn-warning my_col" 
            type="submit">  {{ trans('butt.save') }}  </button>

        </div>

    </form>

    <form class ="row" action="{{route($routes['routeDestroy'], $entity->id)}}" method="POST">
        @method('delete')

        {{ csrf_field()}}
        <button type="submit" class="text-left col-md-auto btn btn-DARK my_col"> {{ trans('butt.delete') }} </button>

    </form>

</div>

</body>
</html>