    <x-app-layout>
        <x-slot name="header">
            カフェを登録する
        </x-slot>
       <div class="text-center">
        <form action="/reg/complete" method="POST" enctype="multipart/form-data">
            @csrf
            <h2>店名</h2>
            <input type="text" name="cafe[name]" placeholder="店名を入力してください"/>
      
      
            <h2>住所</h2>
            <input type="text" name="cafe[address]" placeholder="住所を入力してください"/>
            
       
     
            <h2>アクセス</h2>
            <input type="text" name="cafe[access]" placeholder="○○駅徒歩3分"/>
        
        
            <h2>電話番号</h2>
            <input type="text" name="cafe[tell]" placeholder="ハイフンを入れてください"/>
       
       
            <h2>営業時間</h2>
            <input type="text" name="cafe[open_hours]" placeholder="8時～20時"/>
       
            <h2>定休日</h2>
            <input type="text" name="cafe[regular_holiday]" placeholder="火曜、日曜"/>
        
            <p>Wi-Fi<br>
            <input type="radio" name="cafe[wifi]"  value="あり">あり
            <input type="radio" name="cafe[wifi]"  value="なし">なし
            </p>
            <p>コンセント<br>
            <input type="radio" name="cafe[outlet]" value="あり">あり
            <input type="radio" name="cafe[outlet]" value="なし">なし
            </p>
            <p>作業スペース<br>
            <input type="radio" name="cafe[working_space]" value="あり">あり
            <input type="radio" name="cafe[working_space]" value="なし">なし
            </p>
            <p>喫煙スペース<br>
            <input type="radio" name="cafe[smorking_space]" value="あり">あり
            <input type="radio" name="cafe[smorking_space]" value="なし">なし
            </p>
            <p>紙タバコも可<br>
            <input type="radio" name="cafe[paper_cigarette]" value="あり">あり
            <input type="radio" name="cafe[paper_cigarette]" value="なし">なし
            </p>
            <input type="file" name="image"/>
            <div class="flex">
        <button type="submit" value="この内容で登録する" class="text-block rounded px-4 bg-rose-600">登録する</button>
        </form>
        <a href="/">登録をやめる</a>
        
      </div>
    </x-app-layout>    
   
