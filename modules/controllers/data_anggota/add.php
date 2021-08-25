<?php
    if (isset($_POST['save'])) {

        
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];

        // upload foto
        $foto = upload();

        if ( !$foto ){
            return false;
        }
        include_once "../../../modules/db_connection.php"; 

        // insert anggota data into table
        $result = mysqli_query($con, "INSERT INTO table_anggota(nama, foto, jenis_kelamin, alamat)
                            VALUES ('$nama', '$foto', '$jenis_kelamin', '$alamat')
                            ");
        echo "
            <script>
                window.location.href = 'http://localhost/data_entry/pages/content/data_anggota.php';
            </script>
            ";
            
    
    }


function upload() {
        
        $namaFile = $_FILES['foto']['name'];
        $ukuranFile = $_FILES['foto']['size'];
        $error = $_FILES['foto']['error'];
        $tmpName = $_FILES['foto']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload

        if ($error === 4){
            echo "<script>
                    alert('pilih gambar terlebih dahulu!')
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
                </script>
            ";
            return false;
        }

        // cek size file
        if ( $ukuranFile > 1000000) {
            echo "<script>
                alert('ukuran gambar terlalu besar, mohon di bawah 1mb')
                </script>
            ";
            return false;
        }

        // lolos pengecekan, gambar siap di upload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, '../../../assets/images/poto_anggota/' . $namaFileBaru);

        return $namaFileBaru;

    }
?>