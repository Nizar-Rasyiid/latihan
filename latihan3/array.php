<?php
    $hobi =["basket","futsal","esports"];
    var_dump($hobi);
    echo"<br>";
    //add array
    array_push($hobi, "voli","panah");
    var_dump($hobi);
   //remove array
//    echo"<br>";
//    unset($hobi[2]);
//    var_dump($hobi);
    echo "<br>";
    array_splice($hobi,2,1);
    var_dump($hobi);

?>