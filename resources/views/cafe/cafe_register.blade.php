<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>新規カフェ登録</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <x-app-layout>
        <x-slot name="header">
            カフェを登録する
        </x-slot>
    <body>
        <form action="/register/complete" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="cafe_name">
            <h2>店名</h2>
            <input type="text" name="cafe[name]" placeholder="店名を入力してください"/>
        </div>
        <div class="address">
            <h2>住所</h2>
            <input type="text" name="cafe[address]" placeholder="住所を入力してください"/>
            
        </div>
        <div class="access">
            <h2>アクセス</h2>
            <input type="text" name="cafe[access]" placeholder="○○駅徒歩3分"/>
        </div> 
         <div class="tell">
            <h2>電話番号</h2>
            <input type="text" name="cafe[tell]" placeholder="ハイフンを入れてください"/>
        </div>
        <div class="open_hours">
            <h2>営業時間</h2>
            <input type="text" name="cafe[open_hours]" placeholder="8時～20時"/>
        </div>
        <div class="regular_holiday">
            <h2>定休日</h2>
            <input type="text" name="cafe[regular_holiday]" placeholder="火曜、日曜"/>
        </div>
        <div class="detail">
            <p>Wi-Fi<br>
            <input type="radio" name="cafe[wifi]"  value="1">あり
            <input type="radio" name="cafe[wifi]"  value="0">なし
            </p>
            <p>コンセント<br>
            <input type="radio" name="cafe[outlet]" value="1">あり
            <input type="radio" name="cafe[outlet]" value="0">なし
            </p>
            <p>作業スペース<br>
            <input type="radio" name="cafe[working_space]" value="1">あり
            <input type="radio" name="cafe[working_space]" value="0">なし
            </p>
            <p>喫煙スペース<br>
            <input type="radio" name="cafe[smorking_space]" value="1">あり
            <input type="radio" name="cafe[smorking_space]" value="0">なし
            </p>
            <p>紙タバコも可<br>
            <input type="radio" name="cafe[paper_cigarette]" value="1">あり
            <input type="radio" name="cafe[paper_cigarette]" value="0">なし
            </p>
        </div>
        <div class="image">
            <input type="file" name="image">
        </div>
        <input type="submit" value="この内容で登録する"/>
        </form>
        <a href="/">登録をやめる</a>
    </x-app-layout>    
    </body>
</html>
