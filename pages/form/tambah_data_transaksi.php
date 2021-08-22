<?php include "../template/header.php"; ?>

<div class="conten-tambah-data">
            <h1 class="text-center">Tambah transaksi</h1>

            <form action="#">
                <div class="mb-3">
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">ID Transaksi</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : AN123">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Anggota</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Pilih Anggota</option>
                                <option value="1">Ainur Ridwan</option>
                                <option value="2">Budi Sudarsono</option>
                                <option value="3">Atep</option>
                                <option value="4">Maman Abdurrahman</option>
                                <option value="5">Kuro Silpi Kipli</option>
                                <option value="6">Mamang Japrut</option>
                              </select>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Buku</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Pilih Buku</option>
                                <option value="1">Imajinasi melawan Realita</option>
                                <option value="2">Tobatlah kau</option>
                                <option value="3">Cara sukses di usia 5 tahun</option>
                                <option value="4">Tips kaya tapi mager</option>
                                <option value="5">Mengulas hukum minum air putih tapi pake baygon</option>
                              </select>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : Ainur Ridwan">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control datepicker" id="exampleFormControlInput1" value="<?= date("Y-m-d") ?>" disabled>
                        </div>
                    </div>

                    <button class="btn btn-submit">submit</button>
                    <button class="btn btn-kembali"><a href="../content/data_transaksi_peminjaman.php">Kembali</a></button>
                </div>
                    
            </form>
            
        </div>
            
        </div>
    </div>

<?php include "../template/footer.php"; ?>