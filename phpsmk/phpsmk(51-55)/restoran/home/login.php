<div class="row">
        
        <div class="col-4 mx-auto mt-4">       
            <div class="form-group">
                <form action="" method="post">
                    <div>
                        <h4>LOGIN PELANGGAN </h4>
                    </div>
                    <div class="form-group w-70">
                        <label for="">EMAIL </label>
                        <input type="email" name="email" required placeholder="Masukkan email anda!" class="form-control" >
                    </div>
                
                    <div class="form-group w-70">
                            <label for="">PASSWORD </label>
                            <input type="password" name="password" required placeholder="Masukkan password anda!" class="form-control" >
                    </div>
               
                    <div>     
                        <input type="submit" name="login" value="LOGIN" class="btn btn-primary">

                    </div>
                </form>
               
            </div>
            
        </div>
        
    
</div>

<?php 

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * FROM tblpelanggan WHERE email = '$email' AND password = '$password' AND aktif=1";
    echo $sql;
    $count = $db->rowCOUNT($sql);

    if ($count == 0) {
       echo "<center><h4>EMAIL ATAU PASSWORD ANDA SALAH</h4></center>";
    }else {
        $sql = "SELECT * FROM tblpelanggan WHERE email = '$email' AND password = '$password' AND aktif=1";
        $row = $db->getITEM($sql);

        $_SESSION['pelanggan'] = $row['email'];
        $_SESSION['idpelanggan'] = $row['idpelanggan'];
        
        header("location:index.php");
    }
}


?>