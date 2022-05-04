<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>

    <div class="grid-movies">

        @foreach ($movies as $movie)
           <div class="card-movie">
                <h1>{{ $movie['title'] }}</h1>
                <h2>{{ $movie['original_title'] }}</h2>
                <h3>{{ $movie['nationality'] }}</h3>
                <h4>{{ $movie['date'] }}</h4>
                <h5>{{ $movie['vote'] }}</h5>
           </div>
        @endforeach

     </div>

</body>
</html>
