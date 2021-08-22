<?php 

include_once "../../modules/db_connection.php"; 

// fetch all data anggota from database
$sql = "SELECT * FROM table_anggota";
$result = mysqli_query($con, $sql);
$no = 1;
?>
<?php include "../template/header.php"; ?>
<?php include "../template/sidebar.php"; ?>



<div class="conten col">
                <h1 class="text-center">Data Anggota</h1>
                <button class="btn"><a href="../form/tambah_data_anggota.php">Tambah data Anggota</a></button>
                <form class="example" action="action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
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
                          echo "<tr>";
                          echo "<th scope='row'>$no</th>";
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