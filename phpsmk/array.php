<?php 

    //ARRAY DIMENSI

    /*
    $nama=array("Joni","Tejo","Budi","Siti",100,2.5);

    var_dump($nama);
    echo "<br>";

    echo $nama[2];
    echo "<br>";

    
    for ($i=0; $i<6 ; $i++) { 
        // echo $i.'<br>';
        echo $nama[$i].'<br>';
    }

    foreach ($nama as $key => $value) {
        echo $key.'=> '.$value;
        echo ' <br>';
    }
    */


    //ARRAY ASSOSIATIF

    /*
    $nama=array(
        "Joni"=>"Surabaya","Budi"=>"Malang","Tejo"=>"Jakarta","Siti"=>"Sidoarjo"
    );
    */

    $nama["Joni"]="Surabaya";
    $nama["Budi"]="Malang";
    $nama["Tejo"]="Jakarta";
    $nama["Siti"]="Sidoarjo";


    var_dump($nama);
    echo ' <br>';

    echo $nama['Joni'];
    echo ' <br>';

    foreach ($nama as $key => $value) {
        echo $key. '=> ' .$value;
        echo '<br>';
    }



?>