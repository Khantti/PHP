<?php

// User Defined Function
// function name(){
//     code to be executed;
// }

// -------------------------

// Parameter Function (Or) Arguments Functions
// (i)Single 
// (ii)Multi

// function name($arg1){
//     code to be executed;
// }

// function name($arg1,$arg2){
//     code to be executed;
// }

// -------------------------

// Default Parameter Function (or) Default Argument Function

// function name($name="aung aung",$age=20){
//     code to be executed;
// }

// -------------------------

function myfun(){
    echo "My name is Mr.Khant";
}
myfun();
myfun();

function myfun1(){
    $num1 = 10;
    $num2 = 20;
    $cal = $num1 + $num2;
    echo $cal;
}
myfun1(); // 30

// -----------------------

function singlefun($name){
    echo "My name is $name";
}
singlefun("aung aung");
singlefun("su su");

function multifun($name,$age){
    echo "My name is $name and i am {$age} years old";
}
multifun("kyaw kyaw",30);
multifun("nandar",30);

// ------------------------

function defaultfun($name="hla hla"){
    echo "My name is ${name}.";
}
defaultfun();
defaultfun("aye aye");

function defaultfun1($num1=10,$num2=20,$num3=30){
    $cal = $num1 + $num2 + $num3;
    echo $cal;
}   
defaultfun1(); // 60
defaultfun1(50,10); // 90
defaultfun1(70,5,15); // 90

// ------------------------

// Return

function myreturn($num1){
    $cal = $num1 + 10;
    return $cal;
}
echo myreturn(50); // 60

function returnfun1($num1){
    return $cal = $num1 + 10;
}
echo returnfun1(100); // 110

function returnfun2($num1,$num2,$num3){
    $cal = $num1 + $num2 + $num3;
    return $cal;
}
echo returnfun2(10,20,30); // 60

function returnfun3($num1=10,$num2=20,$num3=30){
    $cal = $num1 + $num2 + $num3;
    return $cal;
}
echo returnfun3(50); // 100
echo returnfun3(); // 60

// Dynamic Function Call

$dyn1 = myreturn(100); // not dynamic function call
echo $dyn1; // 110

$dyn2 = returnfun3(); // not dynamic function call
echo $dyn2; // 60

$dyn3 = "returnfun1"; // dynamic function call
echo $dyn3; // returnfun1
echo $dyn3(100); // 110

$myfun = "returnfun3";
echo $myfun; // aungaung

if(function_exists($myfun)){
    echo "Yes, your variable value is already in some kind of function.";
}else{
    echo "No";
}

?>