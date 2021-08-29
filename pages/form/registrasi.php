<?php 
session_start();

if ( !isset($_SESSION["login"])){
    echo "<script>
        alert('silahkan login terlebih dahulu');
        window.location.href = 'http://localhost/data_entry/pages/content/login.php';
    </script>";
    exit;
}

include "../template/header.php" 

?>
<?php
require "../../modules/db_connection.php";
require "../../modules/registrasi.php";

if ( isset($_POST["register"])){
    if ( registrasi($_POST) > 0) {
        echo "<script>
            alert('user baru berhasil ditambahkan!');
            </script>
            "
        ;
    } else {
        echo mysqli_error($conn);
    }
}

?>

<form class="form-registrasi" method="POST">
            <h1 class="text-center">Form Registrasi</h1>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your username with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password1">
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">Confirm Password</label>
                <input type="password" name="password2" class="form-control" id="password2">
            </div>
            <button type="submit" class="btn btn-primary" name="register">Register</button>
          </form>
    
    </div>

    <?php include "../template/footer.php" ?>