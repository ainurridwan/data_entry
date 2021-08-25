<?php include "../template/header.php"; ?>

<?php
// Display selected user based on id
// Getting id from url
include_once '../../modules/db_connection.php';

$id = $_GET['id'];

// fetch user data based on id
$result = mysqli_query($con, "SELECT * FROM table_anggota WHERE idno=$id");

while($row = mysqli_fetch_array($result)){
    $nama = $row['nama'];
    $foto = $row['foto'];
    $jenis_kelamin = $row['jenis_kelamin'];
    $alamat = $row['alamat'];
}
?>

<div class="conten-form">
            <h1 class="text-center">Edit data anggota</h1>

            <form action="../../modules/controllers/data_anggota/edit.php" method="POST" name="update" enctype="multipart/form-data">
                <div class="mb-3">
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Foto</label>
                        </div>
                        <div class="col">
                            <img class="mb-3" style="width:100px; height:100px;" src='../../assets/images/poto_anggota/<?php echo $foto ?>' alt="<?php $foto ?>">
                            
                            <input type="file" name="foto" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" name="nama" value= "<?php echo $nama ?>">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col">
<<<<<<< HEAD
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name= "jenis_kelamin">
                                <option value="laki-laki" <?php echo ($jenis_kelamin == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                <option value="perempuan" <?php echo ($jenis_kelamin == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                            </select>
=======
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name= "jenis_kelamin" value="<?php echo $jenis_kelamin ?>">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="perempuan">Wanita</option>
                              </select>
>>>>>>> c78653dc5afef551bd9c9e4b7e2443a6e3bbdc78
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        </div>
                        <div class="col">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"><?php echo $alamat ?></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="idno" value="<?php echo $id ?>">
                    <input type="hidden" name="fotoLama" value="<?= $foto; ?>">

                    <button class="btn btn-info" type="submit button" name="update" value="submit button">Update</button>
                    
                    <button class="btn btn-warning btn-kembali" type="button"><a href="../content/data_anggota.php">Kembali</a></button>
                </div>
                    
            </form>
            
        </div>
            
        </div>
    </div>

<?php include "../template/footer.php"; ?>