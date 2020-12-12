<html>

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.scss') }}" rel="stylesheet">
    <link href="{{ asset('css/items.scss') }}" rel="stylesheet">
</head>

<body class="bg">
<div class="container">

    @include('entity.hat')

    @foreach($columns as $column_name => $column_value) 
    <div class="font-weight-bold text-uppercase column">
            <div class="row column_part">
                <div class="col-md-7 offset-md-1"> {{$column_name}} </div>
            </div>

            <div class="row column_part">
                <div class="col-md-10 offset-md-1 btn btn-dark comment"> {{$entity->$column_name}} </div>
                <div class="col-1">  </div>
            </div>
    </div>
    @endforeach
    </div>

</body>
</html>