<?php 
  include_once "../../modules/db_connection.php";

  // fetch data from table transaksi
  $sql = "SELECT *
          FROM table_anggota
          JOIN table_data_transaksi
          ON table_anggota.idno = table_data_transaksi.Anggota_id
          JOIN table_buku
          ON table_buku.id_buku = table_data_transaksi.Buku_id
          ";
  $result = mysqli_query($con, $sql);
  $no = 1;

  $transactions = array();
  while ($transaction = mysqli_fetch_array($result)) {
    $transactions[] = $transaction;
  }
?>

<?php include "../template/header.php"; ?>
<?php include "../template/sidebar.php"; ?>

<div class="conten col">
                <h1 class="text-center">Data Transaksi Peminjaman</h1>
                <button class="btn"><a href="../form/tambah_data_transaksi.php">Tambah transaksi</a></button>
                <form class="example" action="action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Transaksi</th>
                        <th scope="col">ID Anggota</th>
                        <th scope="col">Nama</th>
                        <th scope="col">ID Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Tanggal Pengembalian</th>
                        <th scope="col">opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($transactions as $row){ ?>
                      <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td>TR<?= $row['id_transaksi'] ;?></td>
                        <td>AN<?=  $row['idno'];?></td>
                        <td><?= $row['nama'] ?></td>
                        <td>BK<?= $row['id_buku'] ?></td>
                        <td><?= $row['judul_buku'] ?></td>
                        <td><?= $row['tanggal_pinjam'] ?></td>
                        <td><?= $row['tanggal_pengembalian'] ?></td>
                        <td>
                            <button class="btn btn-edit"><a href="../form/edit_data_transaksi.php?id=<?= $row['id_transaksi'] ?>">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
                      <?php $no++; } ?>
                    </tbody>
                  </table>
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>

<?php include "../template/footer.php"; ?>