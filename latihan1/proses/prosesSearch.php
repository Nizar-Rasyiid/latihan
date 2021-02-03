<?php
$name =strtolower( $_POST ["nama"]);
 $n= strtolower("Nasi Goreng");
  $m= strtolower("Mie") ;
   $r=strtolower( "Rendang");

if ($name == $n) {
   
       echo "nasi goreng adalah nasi yang digoreng";
}elseif ($name ==$m) {
    echo "Mie ayam adalah Mie yang diberi topping ayam";
}elseif ($name == $r) {
    echo "Rendang adalah makanan terenak di muka bumi katanya";
}


?>