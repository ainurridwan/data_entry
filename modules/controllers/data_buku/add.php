<?php

if (isset($_POST['save'])) {
    // ambil data
    $judul_buku = $_POST['judul_buku'];
    $sampul = upload();
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];
    $jenis_buku = $_POST['jenis_buku'];

    if (!$sampul) {
        return false;
    }

    // include database connection
    include_once "../../../modules/db_connection.php";

    // insert buku into table
    $result = mysqli_query($con, "INSERT INTO table_buku(judul_buku,sampul,penerbit,pengarang,tahun,jenis_buku) VALUES ('$judul_buku','$sampul','$penerbit','$pengarang','$tahun','$jenis_buku')");

    echo "
            <script>
                alert('berhasil menambahkan data');
                window.location.href = 'http://localhost/data_entry/pages/content/data_buku.php';
            </script>
            ";
    
    

}

function upload() {
        
    $namaFile = $_FILES['sampul']['name'];
    $ukuranFile = $_FILES['sampul']['size'];
    $error = $_FILES['sampul']['error'];
    $tmpName = $_FILES['sampul']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload

    if ($error === 4){
        echo "<script>
                window.alert('pilih gambar terlebih dahulu!');
                window.location.href = 'http://localhost/data_entry/pages/form/tambah_data_buku.php';
            </script>
        ";
        return false;
    }

    // cek apakah yang di upload adalah gambar
    $ektensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if ( !in_array($ekstensiGambar, $ektensiGambarValid)) {
        # code...
        echo "<script>
            alert('yang anda upload bukan gambar mohon file berekstensi .jpg .jpeg .png')
            window.location.href = 'http://localhost/data_entry/pages/form/tambah_data_buku.php';
            </script>
        ";
        return false;
    }

    // cek size file
    if ( $ukuranFile > 1000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar, mohon di bawah 1mb')
            window.location.href = 'http://localhost/data_entry/pages/form/tambah_data_buku.php';
            </script>
        ";
        return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, '../../../assets/images/cover_book/' . $namaFileBaru);

    return $namaFileBaru;

}




?>
