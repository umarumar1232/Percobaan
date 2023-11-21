<div class ="container-fluid">
    <h1 class ="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class = "row justify-content-center">
        <div class = "col-md-8">
            <div class = "card">
                <div class = "card-header justify-content-center">
                    Form Tambah Prodi
                </div>

                <div class = "card-body">
                    <form action="" method="POST" enctype="multipart/form-data">                    
                            <label for="prodi">Prodi</label>
                            <input type="text" name="prodi"  value="<?= set_value('prodi') ?>" class = "form-control" id="prodi" placeholder="prodi">
                            <?= form_error('prodi', '<small class="text-danger pl-3' , '</small>'); ?>
                        </div>

                        <div class = "form-group">
                        <label for="prodi">Akreditasi</label>
                            <select name="akreditasi"  value="<?= set_value('akreditasi') ?>" id="akreditasi" class = "form-control">
                                <option value="" selected disabled>Akreditasi</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                            <?= form_error('akreditasi', '<small class="text-danger pl-3' , '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan"  value="<?= set_value('ruangan') ?>" class = "form-control" id="ruangan" placeholder="Ruangan">
                            <?= form_error('ruangan', '<small class="text-danger pl-3' , '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="kaprodi">Kaprodi</label>
                            <input type="text" name="kaprodi"  value="<?= set_value('kaprodi') ?>" class = "form-control" id="kaprodi" placeholder="Kaprodi">
                            <?= form_error('kaprodi', '<small class="text-danger pl-3' , '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="Gambar">Gambar</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                        </div>

                        <a href="<?= site_url('Prodi')?> " class ="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
