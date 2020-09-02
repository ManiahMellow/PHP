<?php 

    function belajar(){
        echo 'saya belajar PHP';
    }

    belajar();
    echo '<br>';
    belajar();
    echo '<br>';

    function luas($p=5,$l=3){
        $luas=$p*$l;

        echo $luas;
    }

    luas(15,5);
    echo '<br>';

    function luas2($p=5,$l=3){
        $luas=$p*$l;

        return $luas;
    }

    echo luas2(30,5)* 4;
    echo '<br>';
   
    function output(){
        return "Belajar function PHP";
    }
    echo output();
?>