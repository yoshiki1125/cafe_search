<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>map</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <h1 class="name">{{ $cafe->name }}</h1>
   <div id="map" style="width:500px; height:500px"></div>
    <h2 class="address">{{ $cafe->address }}</h2>
   
   <script>
function initMap() {
  var target = document.getElementById('map');
  var address = '{{ $cafe->address }}'; //住所を指定
  var geocoder = new google.maps.Geocoder();//ジオコーディングのインスタンス生成
  
  geocoder.geocode({ address: address }, function(results, status){
    if (status === 'OK' && results[0]){　//statusを確認して処理開始
    
      console.log(results[0].geometry.location);
      
       var map = new google.maps.Map(target, {  
         center: results[0].geometry.location,
         zoom: 18
       });
       
       var marker = new google.maps.Marker({
         position: results[0].geometry.location,
         map: map,
         //ピンが降ってくるアニメーション
         animation: google.maps.Animation.DROP
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
    </body>
