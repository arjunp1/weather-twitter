<?php

define('DBCN' , [
  
    'Host' => 'localhost',
    'Port' => '3306',
    'Name' => 'dsadb',
    'User' => 'root',
    'Pass' => '',
 
]);


define('twitter_api',[
    'consumer_key'        => 'EKW7EzfDTrOGOl7JO1EiuMWNn',
    'consumer_secret'     => '9g18cher4cnKp9zPVscMVUVXiFjGd1OTyBWcBQJuVH3LEwPU3H',
    'access_token'        => '1065695870690172929-9FlkryDb1zTEpDdzIdghHeOaNXvBJy',
    'access_token_secret' => 'akrL68uPvNhLP4MQL1IKwNdcIhmk2wU6jVcEvZraJ9zO9',
]);

//weather APIs - call as constant('NameOfKey')

define('weatherAPI', "94724cd14db5eb6e2a40ddca60060b2d");
define('LDNWeatherURL', "https://api.openweathermap.org/data/2.5/weather?q=london&appid=". constant('weatherAPI')."");
define('NYWeatherURL', "https://api.openweathermap.org/data/2.5/weather?q=new+york&appid=". constant('weatherAPI')."");

define('LDNForecastURL', "https://api.openweathermap.org/data/2.5/forecast?q=london&appid=". constant('weatherAPI')."");
define('NYForecastURL', "https://api.openweathermap.org/data/2.5/forecast?q=new+york&appid=". constant('weatherAPI')."");

//map API same use as above
define('mapAPI', "AIzaSyCNUnIIS_i6QdepUR32IS8Xn4pK8amT26c");
define('mapURL', "https://maps.googleapis.com/maps/api/js?key=". constant('mapAPI'). "&callback=initialize");

?>