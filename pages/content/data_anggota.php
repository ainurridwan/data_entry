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



// pagination konfigurasi

$jumlahDataPerhalaman = 5;

// fetch all data anggota from database
$results = mysqli_query($con, "SELECT * FROM table_anggota");
$jumlahData = mysqli_num_rows($results);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAKtif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// halaman aktif = 2, awalData = 5
// halaman aktif = 3 , awalData = 9

$awalData =  ($jumlahDataPerhalaman * $halamanAKtif) - $jumlahDataPerhalaman;

// round pembulatan ke desimal terdekat
// ceil pembulatan ke atas
// floor pembulatan ke bawah

$sql = "SELECT * FROM table_anggota LIMIT $awalData, $jumlahDataPerhalaman";

if (isset($_GET['cari'])) {
  $search = $_GET['keyword'];
  $sql = "SELECT * FROM table_anggota WHERE nama like '%$search%' OR 
          idno like '%$search%' OR 
          alamat like '%$search%'";
  $result = mysqli_query($con, $sql);
  if ($result === 0) {
    echo "data tidak ditemukan";
  }
}else {
  $result = mysqli_query($con, $sql);
}

$no = 1;


?>
<?php include "../template/header.php"; ?>
<?php include "../template/sidebar.php"; ?>



<div class="conten col">
                <h1 class="text-center">Data Anggota</h1>
                <button class="btn"><a href="../form/tambah_data_anggota.php">Tambah data Anggota</a></button>
                
                <form class="example" action="" method="get">
                    <input style="width:500px;" type="text" placeholder="Search.." name="keyword" autofocus autocomplete="off">
                    <button type="submit" name="cari"><i class="fa fa-search"></i></button>
                </form>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Anggota</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      while ($row = mysqli_fetch_array($result)) {                     
                          $image = $row['foto'];
                          $id_anggota = $row['anggotastr']. "" . $row['idno'] ;
                          $id = $row['idno'];
                          $awalData +=1;
                          echo "<tr>";
                          echo "<th scope='row'>$awalData</th>";
                          echo "<td>" . $id_anggota . "</td>";
                          echo "<td>" . $row["nama"] . "</td>";
                          echo "<td>" . "<img src='../../assets/images/poto_anggota/$image' alt='$image'></img>" . "</td>";
                          echo "<td>" . $row["jenis_kelamin"] . "</td>";
                          echo "<td>" . $row["alamat"] . "</td>";
                          echo "<td><button class='btn btn-edit '>" . "<a href='../form/edit_data_anggota.php?id=$row[idno]'>" . "edit</a></button>";
                          echo " ";
                          echo "<button class='btn btn-cetak '>" . "<a href='../../modules/controllers/data_anggota/cetak.php'>" . "cetak</a></button>";
                          echo " ";
                          echo "<button class='btn btn-delete '>" . "<a href='../../modules/controllers/data_anggota/delete.php?id=$row[idno]' onclick='return confirm(`Apakah anda yakin untuk menghapus data ini?`);'>" . "delete</a></button></td>";
                          echo "</tr>";
                      }
                      ?>
                    </tbody>
                  </table>

                  <!-- navigasi page -->

                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                      <?php if( $halamanAKtif > 1) : ?>
                      <li class="page-item">
                        <a class="page-link" href="?halaman=<?= $halamanAKtif - 1 ?>" aria-disabled="true">Previous</a>
                      </li>
                      <?php else : ?>
                      <li class="page-item disabled">
                        <a class="page-link" href="?halaman" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <?php endif ; ?>
                      <?php  for($i=1; $i <= $jumlahHalaman; $i++) : ?>
                      <li class="page-item"><a class="page-link" href="?halaman=<?= $i ?>"><?= $i ?></a></li>
                      <?php  endfor; ?>
                      
                      <?php if( $halamanAKtif < $jumlahHalaman) : ?>
                      <li class="page-item">
                        <a class="page-link" href="?halaman<?= $halamanAKtif + 1 ?>">Next</a>
                      </li>
                      <?php else : ?>
                      <li class="page-item disabled">
                        <a class="page-link" href="?halaman<?= $halamanAKtif + 1 ?>">Next</a>
                      </li>  
                      <?php endif; ?>
                    </ul>
                  </nav>

                  <!-- end navigasi page -->
            </div>
        </div>
    </div>

<?php include "../template/footer.php"; ?>