<div class ="container-fluid">
    <h1 class ="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class = "row justify-content-center">
        <div class = "col-md-8">
            <div class = "card">
                <div class = "card-header justify-content-center">
                    Form Tambah Barang
                </div>
                <div class = "card-body">
                    <form action="" method="POST" enctype="multipart/form-data">                    
                            <label for="nama">Nama Barang</label>
                            <input type="text" name="nama"  value="<?= set_value('barang') ?>" class = "form-control" id="barang" placeholder="barang">
                            <?= form_error('barang', '<small class="text-danger pl-3' , '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori Barang</label>
                            <input type="text" name="kategori"  value="<?= set_value('kategori') ?>" class = "form-control" id="kategori" placeholder="Kategori Barang">
                            <?= form_error('kategori', '<small class="text-danger pl-3' , '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok Barang</label>
                            <input type="text" name="stok"  value="<?= set_value('stok') ?>" class = "form-control" id="stok" placeholder="Stok">
                            <?= form_error('barang', '<small class="text-danger pl-3' , '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga"  value="<?= set_value('harga') ?>" class = "form-control" id="harga" placeholder="Harga">
                            <?= form_error('harga', '<small class="text-danger pl-3' , '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Gambar">Gambar</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                            <label for="gambar" class="custom-file-label">Choose File</label>
                        </div>
                        <a href="<?= site_url('Barang')?> " class ="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Barang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
