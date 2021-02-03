<?php
    $ob = new stdClass();
    $ob->nama = "Nizar";
    $ob->kelas = "XI RPL";
    $ob->walikelas = "Ust.Dedi";
    
    $data = json_encode($ob);
    echo $data;
    echo "<br>";
    $ob->mataPelajaran = "Flutter";
    $data = json_encode($ob);
    echo $data
    
?>