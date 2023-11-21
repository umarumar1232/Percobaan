
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-6">
            <div class="bg-light rounded h-100 p-4">
                <h4 class="mb-4">Form Ubah Data Calon Presiden</h4>
                <form action="<?= base_url('Capres/update') ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nik"
                            value="<?= $capres['nik']; ?>" placeholder="">
                        <label for="floatingInput">NIK</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="nama_lengkap"
                            value="<?= $capres['nama_lengkap']; ?>" placeholder="">
                        <label for="floatingInput">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="asal"
                            value="<?= $capres['asal']; ?>" placeholder="">
                        <label for="floatingInput">Asal</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="umur"
                            value="<?= $capres['umur']; ?>" placeholder="">
                        <label for="floatingInput">kaprodi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="partai_pendukung"
                            value="<?= $capres['partai_pendukung']; ?>" placeholder="">
                        <label for="floatingInput">partai pendukung</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="riwayat_pekerjaan"
                            value="<?= $capres['riwayat_pekerjaan']; ?>" placeholder="">
                        <label for="floatingInput">Riwayat Pekerjaan</label>
                    </div>
                   
                    <a href="<?= base_url('Capres/index')?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
