<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Birre</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <div class="product-container">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$beer->cover}}" alt="">
                <div class="card-body">
                <h5 class="card-title">{{$beer->name}}</h5>
                <p class="card-text">{{$beer->description}}</p>
                <a href="/beers" class="btn btn-primary">Return</a>
                <a href="{{route('beers.create')}}" class="btn btn-primary">Add</a>
                </div>
            </div>

        </div>

    </body>
</html>
