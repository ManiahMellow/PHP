<?php 
  
    //PENGULANGAN NAIK / BERTAMBAH
        for ($i=1; $i<=12 ; $i++) { 
            echo $i." ,";
        }
        echo '<br>';
        for ($i=1; $i<=12 ; $i=$i+2) { 
            echo $i." ,";
        }
        echo '<br>';

    //PENGULANGAN MENURUN / BERKURANG
        for ($i=12; $i>=1 ; $i--) { 
            echo $i." ,";
        }
        echo '<br>';
        for ($i=12; $i>=1 ; $i=$i-2) { 
            echo $i." ,";
        }
    

    $a=1;
    while ($a <= 10) {
        echo $a.' ,';
        $a++;
    }
    */
    echo '<br>';

    $a=1;
    do {
        echo $a.' ,';
        $a++;
    } while ($a <= 10);




?>