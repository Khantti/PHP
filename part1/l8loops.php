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
?>