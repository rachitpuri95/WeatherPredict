<?php  
$cityname= $_GET["city"];

$cityname= str_replace(" ", "",$cityname);

$url= "http://www.weather-forecast.com/locations/".$cityname."/forecasts/latest";




 $contents= file_get_contents($url);
preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);
 
 echo $matches[1];


?> 