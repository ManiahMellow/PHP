<?php 

   $buah = ['apel','jeruk',500,'mangga',300, 2.5];

   var_dump($buah);
   echo "<br>";
    
   echo $buah[2];
   echo "<br>";

foreach ($buah as $key => $value) {
    echo $key." =>".$value;
    echo "<br>";

}
echo "<br>";

// Array Asosiatif

$harga = ['mangga'=>300,'jeruk'=>200,'apel'=>100];

var_dump($harga);
echo "<br>";

foreach ($harga as $key => $value) {
   echo " harga ".$key. " ".$value;
   echo "<br>";
}

echo $harga['mangga'];
echo "<br>";

$isi = array_keys($harga);
var_dump($isi);
echo "<br>";

echo $isi[0];
echo "<br>";

foreach ($isi as $key => $value) {
    echo $key." => ".$value;
    echo "<br>";
}

?>