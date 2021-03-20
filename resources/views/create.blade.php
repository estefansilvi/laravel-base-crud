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
            <h1 style="text-align: center; padding: 10px 0">Crea la tua nuova birra</h1>

            <form>
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
                    'name'=>'name',
                    'aria'=>'nameHelp',
                    'placeholder'=>'descrizione birra'
                ])

                @include('components.input', [
                    'id'=>'gradation',
                    'label'=>'Gradation',
                    'type'=>'text',
                    'name'=>'name',
                    'aria'=>'nameHelp',
                    'placeholder'=>'gradazione della birra'
                ])

                @include('components.input', [
                    'id'=>'color',
                    'label'=>'Color',
                    'type'=>'text',
                    'name'=>'name',
                    'aria'=>'nameHelp',
                    'placeholder'=>'colore birra'
                ])


                @include('components.input', [
                    'id'=>'price',
                    'label'=>'Price',
                    'type'=>'text',
                    'name'=>'name',
                    'aria'=>'nameHelp',
                    'placeholder'=>'prezzo della birra'
                ])

                @include('components.input', [
                    'id'=>'cover',
                    'label'=>'Cover',
                    'type'=>'text',
                    'name'=>'name',
                    'aria'=>'nameHelp',
                    'placeholder'=>'inserire url della immagine'
                ])


                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </body>
</html>
