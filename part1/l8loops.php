<?php

//=> PHP Looping

// for
// foreach
// while
// do..while

$colorsones = ["red","green","blue","white","black","gray","pink"]; // indexed array
echo count($colorsones);
var_dump($colorsones);

$coloroneskey = array_keys($colorsones);
// echo $coloroneskey; // error
var_dump($colorsones);

for($i=0;$i < count($colorsones);$i++){
    // echo $i; // 0 to 6

    // echo "This is indexed array or manual array by forloop = index key is ".$i. " and the value is = ".$colorsones[$i];

    echo "This is indexed array or manual array by forloop = index key is ".$coloroneskey[$i]. " and the value is = ".$colorsones[$i];
}

foreach($colorsones as $colorsone){
    echo "This is indexed array or manual array by foreach = ".$colorsone;
}

foreach($colorsones as $key=>$value){
    // echo $key;
    echo "This is indexed array or manual array by foreach = index key is ".$key . " and value is ".$value;
}

$x = 0;
while($x < count($colorsones)){
    // echo $colorsones[$x];
    // $x++;

    // echo "This is indexed array or manual array by foreach = index key is ".$x . " and value is ".$colorsones[$x];
    echo "This is indexed array or manual array by foreach = index key is ".$coloroneskey[$x] . " and value is ".$colorsones[$x];
    $x++;
}

$y=0;
do{
    echo "This is indexed array or manual array by foreach = index key is ".$coloroneskey[$y] . " and value is ".$colorsones[$y];
    $y++;
}while($y<count($colorsones));


?>