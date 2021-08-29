<?php
session_start();

if ( !isset($_SESSION["login"])){
    echo "<script>
        alert('silahkan login terlebih dahulu');
        window.location.href = 'http://localhost/data_entry/pages/content/login.php';
    </script>";
    exit;
}

include "../../modules/db_connection.php";

$sql = "SELECT * FROM table_buku";
$result =  mysqli_query($con, $sql);
$no = 1;
?>
<?php include "../template/header.php"; ?>
<?php include "../template/sidebar.php"; ?>

<div class="conten col">
                <h1 class="text-center">Data Buku</h1>
                <button class="btn"><a href="../form/tambah_data_buku.php">Tambah data buku</a></button>
                <form class="example" action="search.php" method="post">
                    <input style="width:500px;" type="text" placeholder="Search.." name="keyword" autofocus autocomplete="off">
                    <button type="submit" name="cari"><i class="fa fa-search"></i></button>
                </form>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jenis Buku</th>
                        <th scope="col">opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      while ($row = mysqli_fetch_array($result)) {
                        $idbuku = $row['bukustr']."".$row['id_buku'];
                        echo "<tr>";
                        echo "<th scope='row'>$no</th>";
                        echo "<td scope='row'>$idbuku</td>";
                        echo "<td scope='row'>$row[judul_buku]</td>";
                        echo "<td><img src='../../assets/images/cover_book/$row[sampul]' alt='$row[sampul]'></img></td>";
                        echo "<td scope='row'>$row[penerbit]</td>";
                        echo "<td scope='row'>$row[pengarang]</td>";
                        echo "<td scope='row'>$row[tahun]</td>";
                        echo "<td scope='row'>$row[jenis_buku]</td>";
                        echo "<td><button class='btn btn-edit '>" . "<a href='../form/edit_data_buku.php?id=$row[id_buku]'>" . "edit</a></button>";
                        echo " ";
                        echo "<button class='btn btn-cetak '>" . "<a href='../../modules/controllers/data_buku/cetak.php'>" . "cetak</a></button>";
                        echo " ";
                        echo "<button class='btn btn-delete '>" . "<a href='../../modules/controllers/data_buku/delete.php?id=$row[id_buku]' onclick='return confirm(`Apakah anda yakin untuk menghapus data ini?`);'>" . "delete</a></button></td>";
                        echo "</tr>";
                        $no++;
                      }
                      ?>
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