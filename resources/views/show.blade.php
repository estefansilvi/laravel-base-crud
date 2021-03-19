<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Birre</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <div id="show-root">
            <img src="{{$beer->cover}}" alt="">

            <div class="description">
                <h1>{{$beer->name}}</h1>
                <div><b>Descrizione: </b>{{$beer->description}}</div>
                <div><b>Gradazione alcolica: </b>{{$beer->gradation}}</div>
                <div><b>Colore: </b>{{$beer->color}}</div>
                <div><b>Prezzo: </b>{{$beer->price}}</div>
            </div>

        </div>

    </body>
</html>
