<?php
// include database connection file
include_once "../../../modules/db_connection.php"; 

// check if form is submitted for anggota update, then redirect to homepage after update
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $status_peminjaman = $_POST['status_peminjaman'];
    // update data anggota
    $result = mysqli_query($con, "UPDATE table_data_transaksi SET status_peminjaman='$status_peminjaman',tanggal_pinjam='$tanggal_pinjam' where id_transaksi=$id");
    echo "<script>
    alert('data berhasil diupdate');
    window.location.href = '../../../pages/content/data_transaksi_peminjaman.php';
    </script>";
} else {
    echo "gagal update data";
}
?>


