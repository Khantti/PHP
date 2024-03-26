<?php
// 1 Jan 1970 UTC

date_default_timezone_set("Asia/Yangon");

$getdate = getdate();
// echo $getdate;
var_dump($getdate);
echo "<pre>".print_r($getdate,true)."</pre>";

echo "This is seconds = ".$getdate["seconds"];
echo "This is minutes = ".$getdate["minutes"];
echo "This is hours = ".$getdate["hours"];

echo "This is weekday = ".$getdate["weekday"]; // Tuesday
echo "This is mday = ".$getdate["mday"]; // 0-sun 1-mon
echo "This is yday = ".$getdate["yday"]; // 64 day of the year

echo "This is month = ".$getdate["month"]; // March
echo "This is mon = ".$getdate["mon"]; // 3  day of month
echo "This is mday = ".$getdate["mday"]; // 26

echo "This is year = ".$getdate["year"]; // 2024

echo "This is 0 = ".$getdate["0"]; // 1711468499

$time = time();
echo "This is 0 = ".$time; // 1711468499

// DATE/ TIME FORMAT
// date(format,timestamp);

$date = date("a",$time);
echo "This is format a = ".$date; // am pm

$date = date("A",$time);
echo "This is format A = ".$date; // AM PM

$date = date("d",$time);
echo "This is format d = ".$date; // 26 // day leading zero

$date = date("D",$time);
echo "This is format D = ".$date; // Tue 

$date = date("F",$time);
echo "This is format F = ".$date; // March

$date = date("g",$time);
echo "This is format g = ".$date; // 10 // Hours no leading zero

$date = date("G",$time);
echo "This is format G = ".$date; // 22 // Hours 24 hour format no leading zero

$date = date("h",$time);
echo "This is format h = ".$date; // 10 // Hours leading zero

$date = date("H",$time);
echo "This is format H = ".$date; // 10 // Hours 24 hour format leading zero

$date = date("i",$time);
echo "This is format i = ".$date; // Minutes leading zero

$date = date("j",$time);
echo "This is format j = ".$date; // day of month no leading zero

$date = date("l",$time);
echo "This is format l = ".$date; // Tuesday

$date = date("L",$time);
echo "This is format L = ".$date; // leap year (1 = true , 0 = false)

$date = date("m",$time);
echo "This is format m = ".$date; // 03 month  leading zero

$date = date("M",$time);
echo "This is format M = ".$date; // Mar 

$date = date("n",$time);
echo "This is format n = ".$date; // 3 Month no leading zero

$date = date("r",$time);
echo "This is format r = ".$date; // Tue, 26 Mar 2024 22:51:28 +0630

$date = date("s",$time);
echo "This is format s = ".$date; // seconds

$date = date("U",$time);
echo "This is format U = ".$date; // 1711470184

$date = date("y",$time);
echo "This is format y = ".$date; // 24

$date = date("Y",$time);
echo "This is format Y = ".$date; // 2024

$date = date("z",$time);
echo "This is format z = ".$date; // day of the year

?>