<?php
$array =["satu","dua","tiga","empat","lima","enam","tujuh","delapan","sembilan","sepuluh"];
// for ($i = 0; $i <= 9; $i++) {
//     if ($i == 5) {
//         array_splice($array,$i, 1);
//     } elseif ($i == 7) {
//         array_splice($array,$i, 2);
//         foreach ($array as $key) {
//             echo $key;
//             echo "<br>";
//         }
//     }
    
// }

for ($i=0; $i < count($array,$i,1); $i++) { 
    if ($i == 5 || $i ==8 || $i==9) {
        array_slice($array,$i,1);
    }else {
        echo "$array[$i]";
        echo "<br>";
    }
}



// for ($i=1; $i < count($array); $i++) { 
//         if ($array[$i]) {
//             var_dump($array);
//             echo "<br>";
//         }
// }

    // foreach ($array as $arr => $loop) {
    //      if ($loop !=6 && $loop !=9 && $loop != 10) {
    //         var_dump($loop);
    //         echo "$loop";
    //          echo "<br>";
             
    //     }
    // }
   
        


?>