<html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.scss') }}" rel="stylesheet">
    <link href="{{ asset('css/items.scss') }}" rel="stylesheet">
</head>

<body class="bg">
<div class="container">

    @include('entity.hat')

    <form action="{{route($routes['routeStore'])}}" method="post" class="font-weight-bold text-uppercase column">
    @foreach($columns as $column_name => $column_value) 
    @method('post')
    {{ csrf_field()}}
    
            <div class="row column_part">
                <div class="col-md-7"> {{trans('entity.'.$column_name)}} </div>
            </div>

            <div>
                </input>
                <div class="row column_part"> 
                    @include('entity.fields.'.$column_value)
    
            </div>
    @endforeach

    <button class="row text-left col-3 btn btn-warning my_col" type="submit">{{ trans('butt.save') }}</button>

    </form>
    </div>

</body>
</html>