<?php
// include database connection file
include_once "../../../modules/db_connection.php"; 
include_once "add.php";

// check if form is submitted for anggota update, then redirect to homepage after update
if(isset($_POST['update'])){
    $id = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $sampul = $_FILES['sampul'];
    $jenis_buku = $_POST['jenis_buku'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];
    $sampulLama = $_POST['sampulLama'];

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['sampul']['error'] === 4){
        $sampul = $sampulLama;
    } else {
        $sampul = upload();
    }

    // update data anggota
    $result = mysqli_query($con, "UPDATE table_buku SET judul_buku='$judul_buku',sampul='$sampul',penerbit='$penerbit',pengarang='$pengarang',tahun='$tahun',jenis_buku='$jenis_buku' where id_buku=$id");
    echo "<script>
        alert('data berhasil di update');
        window.location.href = 'http://localhost/data_entry/pages/content/data_buku.php';
    </script>";
} else {
    echo "<script>alert('data berhasil di update');</script>";
}
?>


