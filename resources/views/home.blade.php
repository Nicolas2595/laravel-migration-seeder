<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset("css/home.css") }}">

        <title>Laravel-migration-seeder</title>

    </head>
    <body>

        <h1>{{ $title }}</h1>

        <div class="cards-container">
            @foreach ($travels as $travel)
                <div class="card">
                    <h2>Localita: {{ $travel->locality }}</h2>
                    <h4> Prezzo: {{ $travel->price }}€</h4>
                    <h3> Numero di camere: {{ $travel->number_of_rooms }}</h3>
                    <strong> Persone: {{ $travel->people }}</strong>
                    <h3>Hotel: {{ $travel->hotel }}</h3>
                    <strong>Voto: {{ $travel->vote}}</strong>
                </div>
            @endforeach  
        </div>
        
    </body>
</html>
