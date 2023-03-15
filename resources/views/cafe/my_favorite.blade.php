     <x-app-layout>
        <x-slot name="header">
            お気に入りのカフェ
        </x-slot>
     <div class="text-center">
           <h2 class="text-xl">お気に入り一覧</h2>
            <div class="rounded"><!--店一つ一つの枠を追加-->
              @foreach ($cafes as $cafe)
                <h3 class="text-xl">{{ $cafe->name }}</h3>
                 @if($cafe->image_url)
                       <img src="{{ $cafe->image_url }}" alt="画像が読み込めません"/>
                 @endif
                <h4 class='address'>住所：{{ $cafe->address }}</h4>
                <h4 class='access'>アクセス：{{ $cafe->access }}</h4>
                <h4 class='open_hours'>営業時間：{{ $cafe->open_hours }}</h4>
                <h4 class='regular_holiday'>定休日：{{ $cafe->regular_holiday }}</h4>
                <h4 class='tell'>電話番号：{{ $cafe->tell }}</h4>
        
                   
                    <h3 class='detail'>詳細</h3>
                    <h4>Wi-Fi：{{ $cafe->wifi }}</h4>
                    <h4>コンセント：{{ $cafe->outlet }}</h4>
                    <h4>作業スペース：{{ $cafe->working_space }}</h4>
                    <h4>喫煙スペース：{{ $cafe->smorking_space }}</h4>
                    <h4>紙タバコも可：{{ $cafe->paper_cigarette }}</h4>
                   
                       <a href="/search/map/{{ $cafe->id }}" class="text-block rounded px-4 bg-red-300">マップを見る</a>
                       
                               @if($cafe->users()->where('user_id', Auth::id())->exists())
                          
                               <form action="/search/unfavorite" method="POST">
                                   @csrf
                                   <input type="hidden" value="{{ $cafe->id }}" name="cafe_id">
                                    <button type="submit" class="text-block rounded px-4 bg-rose-600">
                                        お気に入り解除
                                    </button>
                               </form>
                          
                           @else
                          
                               <form action="/search/favorite" method="POST">
                                   @csrf
                                   <input type="hidden" value="{{ $cafe->id }}" name="cafe_id">
                                    <button type="submit" class="text-block rounded px-4 bg-rose-600">
                                        お気に入り
                                    </button>
                               </form>
                          
                           @endif
                             
         　　@endforeach
            </div>
       　　　<a href="/">ホームに戻る</a>
     </x-app-layout>
