<?php 

    $tanggal=12;

    //$hasil=$tanggal<32;

    //PENGUJIAN TANGGAL
         if ($tanggal<32) {
             if ($tanggal>0) {
                 echo 'Benar';
             }
            else {
                 echo 'Salah';
             }
         }
         else {
             echo 'Salah';
         }

         echo '<br>';

    $nilai=40;

    //PENGUJIAN NILAI
        if ($nilai<=100) {
             if ($nilai>30) {
                echo 'Lulus';
             }else {
                 echo 'Remidi';
             }
         }else {
             echo 'Benar';
         }

         echo '<br>';
    //PENGUJIAN MENGGUNAKAN OPERATOR AND (&&)
         if ($nilai>=30&&$nilai<=100) {
             echo 'Nilai mencukupi';
        }else {
             'Nilai kurang';
         }
         echo '<br>';

    //PENGUJIAN MENGGUNAKAN OPERATOR OR (||)
        if ($nilai>=30||$nilai<=100) {
            echo 'Kamu lulus';
        }else {
            echo 'Kamu remidi';
        }








?>