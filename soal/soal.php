<?php
    //menyambungkan file ke file barang.json agar bisa mengambil data json-nya.
    $data = file_get_contents("barang.json");
    //untk mengubah json menjadi array
    $json = json_decode($data,true);
    
    //disini saya menggunakan looping foreach sbg perulangannya 
    //$json dengan key sebagai $js untuk menarik datanya
    foreach ($json as $js) {
        //disini saya deklarasi hargaBarang dari json menjadi rPrice atau harga awalnya 
        $rPrice = $js['hargaBarang'];
        //menggunakan kondisi if untuk memberikan atau menentukan discountnya
        //jika jenis barangnya elektronik maka diberi discount 30%
        if ($js['jenisBarang'] == "Elektronik") {
        // disini saya mendeklarasikan harga barang dari elektronik menjadi $elektroD atau diskon elektronic
        // memberikan discount 30%
            $electroD = $js['hargaBarang'] - ($js['hargaBarang']* 30/100);
        }
        //jika jenis barangnya makanan maka diberi discount 10% plus potongan harga 10000
        if ($js['jenisBarang'] == "Makanan") {
             // disini saya mendeklarasikan harga makanan menjadi $foodD atau diskon makanan
        // memberikan discount 10% plus potongan harga 10000
            $foodD = $js['hargaBarang'] - ($js['hargaBarang']* 10/100 + 10000);
        }
                //jika jenis barangnya pakaian dan harganya lebih dari sama dengan 200000 maka discount 20%
        if ($js['jenisBarang'] == "Pakaian" && $js['hargaBarang'] >= 200000) {
            // disini saya mendeklarasikan harga pakaian menjadi $uniformD atau diskon pakaian
            $uniformD = $js['hargaBarang'] - ($js['hargaBarang']* 20/100 );
        }
            //menampilkan data dengan echo
            echo "Product :". $js["namaBarang"]."<br>";
            echo "Product Id :". $js["kodeBarang"]."<br>";
            echo "Price :". $js["hargaBarang"]."<br>";
            echo "Type of Product :". $js["jenisBarang"]."<br>"."<hr>";
            
    }
   
    
?>