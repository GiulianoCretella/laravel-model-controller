<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1>BoolMovieDbQuery</h1>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-6">
                <div class="card">
                    <h4><a href="route('details',$movie->id)">Titolo: {{$movie->title}}</a></h4>
                    <p>Titolo Originale: {{$movie->original_title}}</p>
                    <p>Nazionalità: {{$movie->nationality}}</p>
                    <p>Voto: {{$movie->vote}}</p>
                    <p>Data di uscita: {{$movie->date}}</p>           
                </div>  
            </div>
            @endforeach
        </div> 
    </div>
</body>
</html>