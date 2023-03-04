<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>検索結果</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body>
       <h2>検索結果</h2>
       @foreach ($cafes as $cafe)
       <div class='cafe'>
           <h3 class='name'>{{ $cafe->name }}</h3>
           <h4 class='address'>{{ $cafe->address }}</h4>
           <h4 class='access'>{{ $cafe->access }}</h4>
           <h4 class='open_hours'>{{ $cafe->open_hours }}</h4>
           <h4 class='regular_holiday'>{{ $cafe->regular_holiday }}</h4>
           <h4 class='tell'>{{ $cafe->tell }}</h4>
           <a href="map/{{ $cafe->id }}">マップを見る</a>
          
       </div>
       @endforeach
    </body>
</html>
