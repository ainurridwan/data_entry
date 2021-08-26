<?php include "../template/header.php"; ?>

<?php
// Display selected user based on id
// Getting id from url
include_once '../../modules/db_connection.php';

$id = $_GET['id'];

// fetch user data based on id
$result = mysqli_query($con, "SELECT *
FROM table_anggota
JOIN table_data_transaksi
ON table_anggota.idno = table_data_transaksi.Anggota_id
JOIN table_buku
ON table_buku.id_buku = table_data_transaksi.Buku_id
WHERE id_transaksi=$id");

$transactions = array();
  while ($transaction = mysqli_fetch_array($result)) {
    $transactions[] = $transaction;
  }
  
  foreach($transactions as $row) {
    // get from table anggota  
    $nama = $row['nama'];
    $alamat_peminjam = $row['alamat'];

    // get from table buku
    $judul_buku = $row['judul_buku'];

    // get from table transaksi
    $id_anggota = $row['Anggota_id'];
    $id_buku = $row['Buku_id'];
    $id = $row['id_transaksi'];
    $status_peminjaman = $row['status_peminjaman'];
    $tanggal_pinjam = $row['tanggal_pinjam'];
    $tanggal_pengembalian = $row['tanggal_pengembalian'];
  }
  
  
  
?>

<div class="conten-form">
            <h1 class="text-center">Edit data anggota</h1>

            <form action="../../modules/controllers/data_transaksi_peminjaman/edit.php" method="POST" name="update" enctype="multipart/form-data">
                <div class="mb-3">
                    
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">ID Anggota</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" name="nama" value= "AN<?= $id_anggota ?>" disabled>
                        </div>
                    </div>
                    
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">ID Buku</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" name="nama" value= "BK<?= $id_buku ?>" disabled>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Nama Peminjam</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" name="nama" value= "<?= $nama ?>" disabled>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value= "<?= $judul_buku ?>" disabled>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        </div>
                        <div class="col">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" disabled><?= $alamat_peminjam ?></textarea>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Status Peminjaman</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status_peminjaman">
                                <option value="belum dikembalikan" <?= ($status_peminjaman == 'belum dikembalikan') ? 'selected' : '';?> >Belum dikembalikan</option>
                                <option value="sudah dikembalikan" <?= ($status_peminjaman == 'sudah dikembalikan') ? 'selected' : '';?>>sudah dikembalikan</option>
                                <option value="hilang atau rusak" <?= ($status_peminjaman == 'hilang atau rusak') ? 'selected' : '';?>>hilang atau rusak</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal Peminajaman</label>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal_pinjam" value= "<?= $tanggal_pinjam ?>" >
                        </div>
                    </div>

                    <input type="hidden" name="id" value="<?= $id ?>">

                    <button class="btn btn-info" type="submit button" name="update" value="submit button">Update</button>
                    
                    <button class="btn btn-warning btn-kembali" type="button"><a href="../content/data_transaksi_peminjaman.php">Kembali</a></button>
                </div>
                    
            </form>
            
        </div>
            
        </div>
    </div>

<?php include "../template/footer.php"; ?>