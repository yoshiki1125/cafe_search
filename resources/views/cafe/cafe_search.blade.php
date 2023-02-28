<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>カフェ検索</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <x-app-layout>
        <x-slot name="header">
            カフェを検索
        </x-slot>
    <body>
       <form action="search" method="GET">
           @csrf
  <div class='keywordSearch'>
            <h3>キーワードから検索する</h3>
            <input type="text" name="keyword" placeholder="店名、住所、駅名を入力してください">
            <input type="submit" name="search">
            </p>
  </div>
  <div class='detailedSearch'>
            <h3>詳細から検索</h3>  
            <p>Wi-Fi
            <input type="checkbox" name="wifi"  value="1">あり
            </p>
            <p>コンセント
            <input type="checkbox" name="outlet" value="1">あり
            </p>
            <p>作業スペース
            <input type="checkbox" name="working_space" value="1">あり
            </p>
            <p>喫煙スペース
            <input type="checkbox" name="smorking_space" value="1">あり
            <p>紙タバコも可
            <input type="checkbox" name="paper_cigarette" value="1">あり
            </p>
            <input type="submit" name="detail">
      </form>
  </div>
    </body>
    </x-app-layout>
</html>




