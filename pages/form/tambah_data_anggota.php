<?php include "../template/header.php"; ?>

<div class="conten-form">
            <h1 class="text-center">Tambah data anggota</h1>

            <form action="../../modules/controllers/data_anggota/add.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Foto</label>
                        </div>
                        <div class="col">
                            <input type="file" class="form-control" id="exampleFormControlInput1" name="foto">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        </div>
                        <div class="col">
                            <input type="input" class="form-control" id="exampleFormControlInput1" placeholder="ex : Jhon Beurges" name= "nama">
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name= "jenis_kelamin">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="perempuan">Wanita</option>
                              </select>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                        </div>
                        <div class="col">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-info" type="submit button" name="save" value="submit button">Send</button>
                    
                    <button class="btn btn-warning btn-kembali" type="button"><a href="../content/data_anggota.php">Kembali</a></button>
                </div>
                    
            </form>
            
        </div>
            
        </div>
    </div>

<?php include "../template/footer.php"; ?>