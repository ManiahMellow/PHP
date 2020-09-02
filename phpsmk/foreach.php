<?php 

    /*
    $nama=array('Tejo','Budi','Siti',100);

    var_dump($nama);
    echo '<br>';

    foreach ($nama as $key => $value) {
        echo $key;
        echo '<br>';
    }*/

    $nama=array("Tejo"=>"Surabaya","Budi"=>"Malang","Siti"=>"SIdoarjo");

    var_dump($nama);
    echo "<br>";

    foreach ($nama as $key => $value) {
        echo $key."--> ". $value;
        echo "<br>";
    }




?>