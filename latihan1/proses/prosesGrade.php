<?php

    $nama = $_POST ["nama"];
    $nilai = $_POST["nilai"];

    if ($nilai >= 85) {
        $grade = "A";
        echo "$nama berhasil LULUS dengan grade $grade";
    }elseif ($nilai >= 70) {
       $grade = "B";
        echo "$nama berhasil LULUS dengan grade $grade";
    }elseif ($nilai >= 60) {
       $grade="C";
       echo "$nama berhasi LULUS dengan grade $grade";

    }elseif ($nilai <= 60) {
       echo "$nama TIDAK LULUS";
    }
   

    

?>