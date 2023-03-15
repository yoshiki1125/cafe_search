   <x-app-layout>
        <x-slot name="header">
            カフェを検索
        </x-slot>
 <div>
       <form action="/search" method="GET">
           @csrf
        <div class="text-center">
            <h3 class="text-xl">キーワードを入力してください</h3>
            <input type="text" name="keyword" placeholder="店名、住所、駅名など" class="mt-2">
            <button class="text-block rounded px-4 bg-rose-600" type="submit" name="search">検索</button>
        </div>
         <div class="text-center mt-8">
                <h3 class="text-xl">絞り込む</h3> 
                <div class="justify-center mt-1">
                 <p class=" p-2">Wi-Fi
                  <input type="checkbox" name="wifi"  value="1">
                 </p>
                   <p class="p-2">コンセント
                    <input type="checkbox" name="outlet" value="1">
                   </p>
                     <p class="p-2">作業スペース
                      <input type="checkbox" name="working_space" value="1">
                     </p>
                       <p class="p-2">喫煙スペース
                        <input type="checkbox" name="smorking_space" value="1">
                       </p>
                         <p class="p-2">紙タバコも可
                          <input type="checkbox" name="paper_cigarette" value="1">
                         </p>
                </div>         
         </div>
       </form>
 </div>
    </x-app-layout>





