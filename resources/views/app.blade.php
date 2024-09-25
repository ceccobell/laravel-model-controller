<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>model controller</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h4 class="card-title">{{ $movie['title'] }}</h4>
                            <h5 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie['original_title'] }}</h5>
                            <span>Nazionalità: {{ $movie['nationality'] }}</span>
                            <div>Data uscita: {{ $movie['date'] }}</div>
                            <div>Voto: {{ $movie['vote'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>