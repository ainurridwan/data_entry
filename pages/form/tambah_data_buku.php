<?php include "../template/header.php"; ?>

<div class="conten-tambah-data">
            <h1 class="text-center">Tambah data buku</h1>

            <form action="tambah_data_buku.php" method="POST">
                <div class="mb-3">
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Sampul atau cover buku</label>
                        </div>
                        <div class="col">
                            <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="sampul.jgp/sampul.png/sampul.jpeg/">
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Judul buku</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : Imajinasi melawan realita">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : gramedia">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : Ainur Ridwan">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Buku</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Pilih Jenis Buku</option>
                                <option value="1">Technology</option>
                                <option value="2">Science</option>
                                <option value="3">Geography</option>
                                <option value="4">Fiction Novel</option>
                                <option value="5">Education</option>
                                <option value="6">Fashion</option>
                              </select>
                        </div>
                    </div>

                    <input type="submit" name="save" value="submit">
                    <button class="btn btn-kembali"><a href="../content/data_buku.php">Kembali</a></button>
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