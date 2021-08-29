<?php

if( isset($_POST['save'])){
    $anggota_id = $_POST['Anggota_id'];
    $status_peminjaman = $_POST['status_peminjaman'];
    $buku_id = $_POST['Buku_id'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];

    // include database connection
    include_once "../../../modules/db_connection.php";

    // insert buku into table
    $result = mysqli_query($con, "INSERT INTO table_data_transaksi(Anggota_id,Buku_id,status_peminjaman,tanggal_pinjam,tanggal_pengembalian) VALUES ('$anggota_id','$buku_id','$status_peminjaman','$tanggal_pinjam','$tanggal_pengembalian')");

  
    echo "<script>
                alert('berhasil menambahkan data');
                window.location.href = 'http://localhost/data_entry/pages/content/data_transaksi_peminjaman.php';
            </script>
            ";
    
}