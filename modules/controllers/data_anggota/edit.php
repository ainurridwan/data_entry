<?php
// include database connection file
include_once "../../../modules/db_connection.php"; 
include_once "add.php";

// check if form is submitted for anggota update, then redirect to homepage after update
if(isset($_POST['update'])){
    $id = $_POST['idno'];
    $nama = $_POST['nama'];
    $foto = $_FILES['foto'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $fotoLama = $_POST['fotoLama'];

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['foto']['error'] === 4){
        $foto = $fotoLama;
    } else {
        $foto = upload();
    }

    // update data anggota
    $result = mysqli_query($con, "UPDATE table_anggota SET nama='$nama',foto='$foto',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where idno=$id");
    echo "data berhasil di update <a href='../../../pages/content/data_anggota.php'>kembali</a>";
} else {
    echo "gagal update data";
}
?>


