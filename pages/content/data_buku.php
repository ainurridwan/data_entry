<?php include "../template/header.php"; ?>
<?php include "../template/sidebar.php"; ?>

<div class="conten col">
                <h1 class="text-center">Data Buku</h1>
                <button class="btn"><a href="../form/tambah_data_buku.php">Tambah data buku</a></button>
                <form class="example" action="action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
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
                      <tr>
                        <th scope="row">1</th>
                        <td>ID123</td>
                        <td>ini judul buku</td>
                        <td><img src="../../assets/images/cover book/cover book sample.jpg" alt="cover book"></td>
                        <td>Gramedia</td>
                        <td>Ainur Ridwan</td>
                        <td>2021</td>
                        <td>Computer</td>
                        <td>
                            <button class="btn btn-edit"><a href="#">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>ID123</td>
                        <td>ini judul buku</td>
                        <td><img src="../../assets/images/cover book/cover book sample.jpg" alt="cover book"></td>
                        <td>Gramedia</td>
                        <td>Ainur Ridwan</td>
                        <td>2021</td>
                        <td>Computer</td>
                        <td>
                            <button class="btn btn-edit"><a href="#">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>ID123</td>
                        <td>ini judul buku</td>
                        <td><img src="../../assets/images/cover book/cover book sample.jpg" alt="cover book"></td>
                        <td>Gramedia</td>
                        <td>Ainur Ridwan</td>
                        <td>2021</td>
                        <td>Computer</td>
                        <td>
                            <button class="btn btn-edit"><a href="#">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>ID123</td>
                        <td>ini judul buku</td>
                        <td><img src="../../assets/images/cover book/cover book sample.jpg" alt="cover book"></td>
                        <td>Gramedia</td>
                        <td>Ainur Ridwan</td>
                        <td>2021</td>
                        <td>Computer</td>
                        <td>
                            <button class="btn btn-edit"><a href="#">edit</a></button>
                            <button class="btn btn-cetak"><a href="#">cetak</a></button>
                            <button class="btn btn-delete"><a href="#">delete</a></button>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td>ID123</td>
                        <td>ini judul buku</td>
                        <td><img src="../../assets/images/cover book/cover book sample.jpg" alt="cover book"></td>
                        <td>Gramedia</td>
                        <td>Ainur Ridwan</td>
                        <td>2021</td>
                        <td>Computer</td>
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