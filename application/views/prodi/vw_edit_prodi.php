
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Form Ubah Data Prodi</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="prodi"
                            value="<?= $prodi['prodi']; ?>" placeholder="">
                        <label for="floatingInput">Nama Prodi</label>
                        <?= form_error('prodi', '<small class="text-danger pl-3' , '</small>'); ?>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" name="akreditasi"
                            value="<?= $prodi['akreditasi']; ?>" aria-label="Floating label select example">
                            <option value="" selected disabled>Akreditasi</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                        <label for="floatingSelect">Akreditasi</label>
                        <?= form_error('akreditasi', '<small class="text-danger pl-3' , '</small>'); ?>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="ruangan"
                            value="<?= $prodi['ruangan']; ?>" placeholder="">
                        <label for="floatingInput">Ruangan</label>
                        <?= form_error('ruangan', '<small class="text-danger pl-3' , '</small>'); ?>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="kaprodi"
                            value="<?= $prodi['kaprodi']; ?>" placeholder="">
                        <label for="floatingInput">kaprodi</label>
                        <?= form_error('kaprodi', '<small class="text-danger pl-3' , '</small>'); ?>
                    </div>
                    <div class = "form-group">
                        <img src="<?= base_url('assets/assets/img/prodi/') . $prodi['gambar']; ?>" style="width : 100px" class="img-thumnail">
                        <div class="custom-file">
                            <input type="file" class = "custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                            <?= form_error('gambar', '<small class="text-danger pl-3' , '</small>'); ?>
                        </div>
                    </div>
                    <a href="<?= base_url('/Prodi')?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
