<?php 
session_start();

if ( !isset($_SESSION["login"])){
    echo "<script>
        alert('silahkan login terlebih dahulu');
        window.location.href = 'http://localhost/data_entry/pages/content/login.php';
    </script>";
    exit;
}

include_once "../../modules/db_connection.php";
include "../template/header.php"; 



    $sql_anggota = "SELECT *
            FROM table_anggota
            ";
    $result_anggota = mysqli_query($con, $sql_anggota);
    $no = 1;

    while ($getDataAnggota = mysqli_fetch_array($result_anggota)) {
    $getDataAnggotaS[] = $getDataAnggota;
    }

    // fetch data tabel_buku
    $sql_buku =  "SELECT * FROM table_buku";
    $result_buku = mysqli_query($con, $sql_buku);
    
    while ($getDataBuku = mysqli_fetch_array($result_buku)) {
        $getDataBukuS[] = $getDataBuku;
    }
?>



<div class="conten-tambah-data">
            <h1 class="text-center">Tambah transaksi</h1>

            <form action="../../modules/controllers/data_transaksi_peminjaman/add.php" method="post">
                <div class="mb-3">

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Anggota | Peminjam</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Anggota_id">
                                <?php foreach($getDataAnggotaS as $row) { ?>
                                <option value="<?= $row['idno'] ?>"><?= $row['nama'] ?> || AN<?= $row['idno'] ?></option>
                                <?php } ?>
                              </select>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Status Pinjaman</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="status_peminjaman">
                                    <option value="belum dikembalikan">Belum dikembalikan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Buku yang dipinjam</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Buku_id">
                                <?php foreach($getDataBukuS as $row) { ?>
                                <option value="<?= $row['id_buku'] ?>"><?= $row['id_buku'] ?> || <?= $row['judul_buku'] ?></option>
                                <?php } ?>
                              </select>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="tanggal_pinjam" class="form-label">Tanggal pinjam</label>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="tanggal_pinjam" placeholder="ex : Ainur Ridwan" name="tanggal_pinjam">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="tanggal_pengembalian" class="form-label">Tanggal pengembalian</label>
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" id="tanggal_pengembalian" placeholder="ex : Ainur Ridwan" name="tanggal_pengembalian">
                        </div>
                    </div>

    

                    <button class="btn btn-info" type="submit button" name="save" value="submit button">Send</button>
                    
                    <button class="btn btn-warning btn-kembali" type="button"><a href="../content/data_transaksi_peminjaman.php">Kembali</a></button>
                </div>
                    
            </form>
            
        </div>
            
        </div>
    </div>

<?php include "../template/footer.php"; ?>