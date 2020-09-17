<?php 

    require_once "../function.php";

    // $id = 8;

    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi, $sql);
    header("location:http://localhost/phpsmk(17-22)/restoran/kategori/select.php");


?>