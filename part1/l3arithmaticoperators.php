<?php
// => Arithmetic Operator

// + - * / %

$num1 = 100;
$num2 = 200;
$num3 = 30.28;
$city = "Mawlamyine";
$car = false;
$myarrs = ["maung maung","kyaw kyaw"];
$colors = array("red","green","blue");

echo $num1;
echo $num2;
echo $num1 + $num2;
echo $num1 - $num2;
echo $num2 - $num1;
echo $num1 * $num2;
echo $num2 / $num1;
echo $num2 % $num1;

// echo $myarrs; // error 
// print $myarrs; // error

var_dump($num1); // int(100)
var_dump($num3); // float(30.28)
var_dump($city); //String(10) "Mawlamyine"
var_dump($car); // bool(false)
var_dump($myarrs); // array(2) {[0]=> string(11) "maung maung" [1]=> string(9) "kyaw kyaw"}

$num4 = true;
$num5 = "10";
$num6 = '20';

var_dump($num5,$num6); // string
echo $num5+$num6; // 30
echo $num6-$num5; // 10
echo $num4+$num5; // 11
var_dump($num5+$num6); // int(30)

// Overwrite or Overrride

$num5 = 50;
$num6 = '60';

var_dump($num5,$num6);

?>