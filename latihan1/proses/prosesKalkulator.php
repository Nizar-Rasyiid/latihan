<?php
    $nilai1 = $_POST["nilai1"];
    $operator = $_POST['operator'];
    $nilai2 = $_POST["nilai2"];

    if ($operator == "+") {
       $hasil = $nilai1 + $nilai2;
    }elseif ($operator == "-") {
        $hasil = $nilai1 - $nilai2;
    }
    elseif ($operator == "*") {
         $hasil = $nilai1 * $nilai2;
    }else  {
        $hasil = $nilai1 / $nilai2;
    }

    echo "<h5> Hasil adalah $hasil<h5>";

    
?>