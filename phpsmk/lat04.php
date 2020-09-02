<?php 

    //OPERATOR MATEMATIKA

    //VARIABEL :

    $a=5;
    $b=2;
        //PENJUMLAHAN : 

        $c=$a+$b;

        echo $c;
        echo '<br>';
        //PENGURANGAN :

        $c=$a-$b;

        echo $c;
        echo '<br>';
        //PERKALIAN :

        $c=$a*$b;

        echo $c;
        echo '<br>';
        //PEMBAGIAN :

        $c=$a/$b;

        echo $c;
        echo '<br>';
        echo round($c).'<br>'; //Pembulatan ke atas
        echo floor($c).'<br>'; //Pembulatan ke bawah

        //MODULUS

        $c=$a%$b;

        echo $c;
        echo '<br>';

    //OPERATOR LOGIKA

        //LEBIH KECIL 
        $c=$a<$b;
        echo $c.'<br>';

        //LEBIH BESAR
        $c=$a>$b;
        echo $c.'<br>';

        //SAMA DENGAN
        $c=$a==$b;
        echo $c.'<br>';

        //TIDAK SAMA DENGAN
        $c=$a!=$b;
        echo $c.'<br>';

    //INCREMENT

        //MENAMBAH NILAI (++)
        $a++;
        echo $a.'<br>';
        //MENGURANGI NILAI (--)
        $a--;
        echo $a.'<br>';

    //OPERASI STRING

    $kata='Korea';
    $arah=' Selatan';

    $hasil=$kata.$arah;
    $hasil.=' negara ginseng';
    echo $hasil.'<br>';
















?>