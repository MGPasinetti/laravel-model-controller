<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
</head>
<body>

    <div class="grid-movies">

        @foreach ($movies as $movie)
           <div class="card-movie">
                <h1>{{ $movie['title'] }}</h1>
                <h2>({{ $movie['original_title'] }})</h2>
                <p>
                    <u>Nationality</u>: {{ $movie['nationality'] }}<br>
                    <u>Exit date</u>: {{ $movie['date'] }}<br>
                    <u>Rating</u>: {{ $movie['vote'] }}
                </p>
           </div>
        @endforeach

     </div>

</body>
</html>
