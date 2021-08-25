<?php include "../template/header.php"; ?>

<?php
// Display selected user based on id
// Getting id from url
include_once '../../modules/db_connection.php';

$id = $_GET['id'];

// fetch user data based on id
$result = mysqli_query($con, "SELECT * FROM table_buku WHERE id_buku=$id");

while($row = mysqli_fetch_array($result)){
    $judul_buku = $row['judul_buku'];
    $sampul = $row['sampul'];
    $penerbit = $row['penerbit'];
    $pengarang = $row['pengarang'];
    $tahun = $row['tahun'];
    $jenis_buku = $row['jenis_buku'];
}

?>

<div class="conten-form">
            <h1 class="text-center">Edit data anggota</h1>

            <form action="../../modules/controllers/data_buku/edit.php" method="POST" name="update" enctype="multipart/form-data">
                <div class="mb-3">
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Sampul</label>
                        </div>
                        <div class="col">
                            <img class="mb-3" style="width:100px; height:100px;" src='../../assets/images/cover_book/<?php echo $sampul ?>' alt="sampul buku">
                            <input type="file" name="sampul" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Judul buku</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" name="judul_buku" value= "<?php echo $judul_buku ?>">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" name="penerbit" value= "<?php echo $penerbit ?>">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" name="pengarang" value= "<?php echo $pengarang ?>">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Tahun</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" name="tahun" value= "<?php echo $tahun ?>">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Buku</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="jenis_buku">
                                <option value="Technology" <?= ($jenis_buku == 'Technology') ? 'selected' : '';?> >Technology</option>
                                <option value="Science" <?= ($jenis_buku == 'Science') ? 'selected' : '';?>>Science</option>
                                <option value="Geography" <?= ($jenis_buku == 'Geography') ? 'selected' : '';?>>Geography</option>
                                <option value="Fiction Novel" <?= ($jenis_buku == 'Fiction Novel') ? 'selected' : '';?>>Fiction Novel</option>
                                <option value="Education" <?= ($jenis_buku == 'Education') ? 'selected' : '';?>>Education</option>
                                <option value="Fashion" <?= ($jenis_buku == 'Fashion') ? 'selected' : '';?>>Fashion</option>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" name="id_buku" value="<?= $id; ?>">
                    <input type="hidden" name="sampulLama" value="<?= $sampul; ?>">

                    <button class="btn btn-info" type="submit button" name="update" value="submit button">Update</button>
                    
                    <button class="btn btn-warning btn-kembali" type="button"><a href="../content/data_buku.php">Kembali</a></button>
                </div>
                    
            </form>
            
        </div>
            
        </div>
    </div>

<?php include "../template/footer.php"; ?>