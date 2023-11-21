<div class = "container-flud">
    <h1 class = "h3 mb-4 text-gray-800"<?php echo $judul; ?>></h1>
    <div class="row">
        <div class="col-md-12">
            <div class = "card-header">
                Detail Prodi
            </div>
            <div class = "card-body">
                <h2 class = "card_title"><?= $prodi['prodi'] ; ?></h2>
                <div class = "row">
                    <div class = "col-md-4">Akreditasi</div>
                    <div class = "col-md-2">:</div>
                    <div class = "col-md-6"><?= $prodi['akreditasi']; ?></div>
                </div>
                <div class = "row">
                    <div class = "col-md-4">Ruangan</div>
                    <div class = "col-md-2">:</div>
                    <div class = "col-md-6"><?= $prodi['ruangan']; ?></div>
                </div>
                <div class = "row">
                    <div class = "col-md-4">Kaprodi</div>
                    <div class = "col-md-2">:</div>
                    <div class = "col-md-6"><?= $prodi['kaprodi']; ?></div>
                </div>
            </div>
            <div class = "card-footer justify-content-center">
                <a href="<?= base_url('Prodi') ?>" class = "btn btn-danger">Tutup</a>
            </div>
        </div>

    </div>
</div>