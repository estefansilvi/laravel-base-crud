<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>birre</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        <div id="root">
            <h1 style="text-align: center; padding: 10px 0">Beers Table</h1>

              <table class="table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Gradation</th>
                    <th scope="col">Color</th>
                    <th scope="col">Price</th>
                    <th scope="col">Cover</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($beers as $beer )
                    <tr>
                        <th scope="row">{{$beer->id}}</th>
                        <td>{{$beer->name}}</td>
                        <td>{{$beer->description}}</td>
                        <td>{{$beer->gradation}}</td>
                        <td>{{$beer->color}}</td>
                        <td>{{$beer->price}}</td>
                        <td><img src="{{$beer->cover}}" alt="" style="width: 100px"></td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
        </div>
    </body>
</html>
