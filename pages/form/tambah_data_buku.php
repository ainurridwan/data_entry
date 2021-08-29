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

?>

<div class="conten-tambah-data">
            <h1 class="text-center">Tambah data buku</h1>

            <form action="../../modules/controllers/data_buku/add.php" method="POST" enctype=multipart/form-data>
                <div class="mb-3">
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Sampul atau cover buku</label>
                        </div>
                        <div class="col">
                            <input type="file" class="form-control" id="exampleFormControlInput1" name="sampul">
                        </div>
                    </div>
                    
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Judul buku</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : Imajinasi melawan realita" name="judul_buku">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : gramedia" name="penerbit">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : Ainur Ridwan" name="pengarang">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : Ainur Ridwan" name="tahun">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Buku</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="jenis_buku">
                                <option selected>Pilih Jenis Buku</option>
                                <option value="Technology">Technology</option>
                                <option value="Science">Science</option>
                                <option value="Geography">Geography</option>
                                <option value="Fiction Novel">Fiction Novel</option>
                                <option value="Education">Education</option>
                                <option value="Fashion">Fashion</option>
                              </select>
                        </div>
                    </div>

                    <button class="btn btn-info" type="submit button" name="save" value="submit button">Send</button>
                    
                    <button class="btn btn-warning btn-kembali" type="button"><a href="../content/data_buku.php">Kembali</a></button>
                </div>
                    
            </form>
            
        </div>
            
        </div>
    </div>

    <?php
    if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $foto = $_POST['foto'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    include_once "../../modules/db_connection.php"; 

    // insert user data into table
    $result = mysqli_query($con, "INSERT INTO table_anggota(nama, foto, jenis_kelamin, alamat)
                           VALUES ('$nama', '$foto', '$jenis_kelamin', '$alamat')
                           ");
    echo "data anggota berhasil ditambahkan <a href='../../../pages/content/home.php'></a>";
    }
?>

<?php include "../template/footer.php"; ?>