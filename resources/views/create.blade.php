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
            <h1 style="text-align: center; padding: 10px 0">Inserisci la tua birra</h1>

            <form action="{{route('beers.store')}}" method="post">
                @csrf
                @method('POST')

                @include('components.input', [
                    'id'=>'name',
                    'label'=>'Name',
                    'type'=>'text',
                    'name'=>'name',
                    'aria'=>'nameHelp',
                    'placeholder'=>'nome birra'
                ])

                @include('components.input', [
                    'id'=>'description',
                    'label'=>'Description',
                    'type'=>'text',
                    'name'=>'description',
                    'aria'=>'nameHelp',
                    'placeholder'=>'descrizione birra'
                ])

                @include('components.input', [
                    'id'=>'gradation',
                    'label'=>'Gradation',
                    'type'=>'text',
                    'name'=>'gradation',
                    'aria'=>'nameHelp',
                    'placeholder'=>'gradazione della birra'
                ])

                @include('components.input', [
                    'id'=>'color',
                    'label'=>'Color',
                    'type'=>'text',
                    'name'=>'color',
                    'aria'=>'nameHelp',
                    'placeholder'=>'colore birra'
                ])


                @include('components.input', [
                    'id'=>'price',
                    'label'=>'Price',
                    'type'=>'text',
                    'name'=>'price',
                    'aria'=>'nameHelp',
                    'placeholder'=>'prezzo della birra'
                ])

                @include('components.input', [
                    'id'=>'cover',
                    'label'=>'Cover',
                    'type'=>'text',
                    'name'=>'cover',
                    'aria'=>'nameHelp',
                    'placeholder'=>'inserire url della immagine'
                ])

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </body>
</html>
