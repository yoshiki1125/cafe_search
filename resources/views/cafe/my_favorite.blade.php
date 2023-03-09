<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>お気に入りのカフェ</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
     <x-app-layout>
        <x-slot name="header">
            お気に入りのカフェ
        </x-slot>
    <body>
   @foreach ($cafes as $cafe)
        <div class='cafe'>
           <h3 class='name'>{{ $cafe->name }}</h3>
           <h4 class='address'>{{ $cafe->address }}</h4>
           <h4 class='access'>{{ $cafe->access }}</h4>
           <h4 class='open_hours'>{{ $cafe->open_hours }}</h4>
           <h4 class='regular_holiday'>{{ $cafe->regular_holiday }}</h4>
           <h4 class='tell'>{{ $cafe->tell }}</h4>
           <a href="/search/map/{{ $cafe->id }}">マップを見る</a>
        </div>
       @if($cafe->image_url)
         <div class=image >
            <img src="{{ $cafe->image_url }}" alt="画像が読み込めません"/>
         </div>
       @endif
   @endforeach
       <a href="/">ホームに戻る</a>
    </body>
     </x-app-layout>
</html>