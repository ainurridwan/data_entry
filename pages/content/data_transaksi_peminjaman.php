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
                        <th scope="col">opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>TR123</td>
                        <td>AN123</td>
                        <td>Ainur Ridwan</td>
                        <td>BK123</td>
                        <td>Imajinasi melawan Realita</td>
                        <td>19-08-2021</td>
                        <td>
                            <button class="btn btn-edit"><a href="#">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>TR123</td>
                        <td>AN123</td>
                        <td>Ainur Ridwan</td>
                        <td>BK123</td>
                        <td>Imajinasi melawan Realita</td>
                        <td>19-08-2021</td>
                        <td>
                            <button class="btn btn-edit"><a href="#">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>TR123</td>
                        <td>AN123</td>
                        <td>Ainur Ridwan</td>
                        <td>BK123</td>
                        <td>Imajinasi melawan Realita</td>
                        <td>19-08-2021</td>
                        <td>
                            <button class="btn btn-edit"><a href="#">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>TR123</td>
                        <td>AN123</td>
                        <td>Ainur Ridwan</td>
                        <td>BK123</td>
                        <td>Imajinasi melawan Realita</td>
                        <td>19-08-2021</td>
                        <td>
                            <button class="btn btn-edit"><a href="#">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>TR123</td>
                        <td>AN123</td>
                        <td>Ainur Ridwan</td>
                        <td>BK123</td>
                        <td>Imajinasi melawan Realita</td>
                        <td>19-08-2021</td>
                        <td>
                            <button class="btn btn-edit"><a href="#">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
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