    <x-app-layout>
    <h1 class="text-xl">{{ $cafe->name }}</h1>
    <h2 class="address">{{ $cafe->address }}</h2>
   <div id="map" style="width:500px; height:500px"></div><!--ここに地図が表示される-->
    <button onclick="history.back();" class="text-block rounded px-4 bg-rose-600">戻る</button><!--前のページに戻る-->
   <script>
function initMap() {
  var target = document.getElementById('map');
  var address = '{{ $cafe->address }}'; //住所を指定
  var geocoder = new google.maps.Geocoder();//ジオコーディングのインスタンス生成
  
  geocoder.geocode({ address: address }, function(results, status){
    if (status === 'OK' && results[0]){　//statusを確認して処理開始
   
      console.log(results[0].geometry.location);
      
       var map = new google.maps.Map(target, {  
         center: results[0].geometry.location,//中心を店にする
         zoom: 18
       });
       
       var marker = new google.maps.Marker({
         position: results[0].geometry.location,
         map: map,
         animation: google.maps.Animation.DROP //ピンが降ってくるアニメーション
       });
       
    }else{ 
      //住所が存在しない場合の処理
      alert('住所が正しくないか存在しません。');
      target.style.display='none';
    }
  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{ config('services.google_map.api_key') }}&callback=initMap" async defer></script>
</x-app-layout>
