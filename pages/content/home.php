<?php 
session_start();

if ( !isset($_SESSION["login"])){
    echo "<script>
        alert('silahkan login terlebih dahulu');
        window.location.href = 'http://localhost/data_entry/pages/content/login.php';
    </script>";
    exit;
}

include "../template/header.php"; 
include "../template/sidebar.php";
?>

        <div class="conten col">
                <h1 class="text-center">SELAMAT DATANG DI SISTEM INFORMASI PERPUSTAKAAN</h1>
                <p class="text-center">"Membaca adalah jendela dunia"</p>
            </div>
        </div>
    </div>

<?php include "../template/footer.php"; ?>