<?php

    $data = file_get_contents("data.json");
    $json = json_decode($data);
    $lastId = $json[count($json)-1]->id;

    $angka = substr($lastId,6,7) + 7;
    echo $angka;
    if ($angka < 10) {
        $id = "Santri0$angka";
    }else {
        $id = "Santri$angka";
    }
    $dataBaru = new stdClass();
    $dataBaru->id = $id;
    $dataBaru->nama = "ras";
    array_push($json,$dataBaru);
    $json = json_encode($json);

    echo $json;

?>