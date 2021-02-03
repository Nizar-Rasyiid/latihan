<?php
    // for ($i=1; $i <= 5 ; $i++) { 
       
    //     for ($x=1; $x <= $i ; $x++) { 
    //          echo "*";
    //     }
    //     echo "<br>";
    // }

    //   for ($i=1; $i <= 5 ; $i++) { 
       
    //     for ($x=$i; $x <= 5 ; $x++) { 
    //         echo "*";
    //      }
    //      echo "<br>";
    //  }
    for( $a=1;$a<=5;$a++) {
	for($b=1; $b<=$a; $b++){
		echo "&nbsp ";
	}
	for($c=5;$c>=$a;$c--){
		echo "*";
	}
	echo "<br/> ";
}
    

?>