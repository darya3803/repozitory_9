<?php
$text = fopen('php9.txt','r');
while ($line = fgets($text)) { 
$a = '/\b((([1-9])|([1-9][0-9])|(1\d\d)|(2[0-5][0-5]))\.(\d|([1-9][0-9])|(1\d\d)|(2[0-5][0-5]))\.(\d|([1-9][0-9])|(1\d\d)|(2[0-5][0-5]))\.((2[0-5][0-5])|(1\d\d)|([1-9][0-9])|\d))\b/';
preg_match_all($a ,$line, $mass);
foreach($mass[0] as $b){
echo $b."</br>";
}       
} 
fclose($text);
?>
