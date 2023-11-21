<div class ="container-fluid">
    <h1 class ="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class = "row justify-content-center">
        <div class = "col-md-8">
            <div class = "card">
                <div class = "card-header justify-content-center">
                    Form Tambah Calon Presiden
                </div>

                <div class = "card-body">
                    <form action="<?= site_url("/Capres/upload")?>" method="POST">                    
                    <div class="form-group">
                            <label for="nik">nik</label>
                            <input type="text" name="nik" class = "form-control" id="nik" placeholder="NIK">
                        </div>

                        <div class="form-group">
                            <label for="nama_lengkap">Nama</label>
                            <input type="text" name="nama_lengkap" class = "form-control" id="nama" placeholder="Nama Lengkap">
                        </div>

                        <div class="form-group">
                            <label for="asal">asal</label>
                            <input type="text" name="asal" class = "form-control" id="asal" placeholder="asal">
                        </div>

                        <div class="form-group">
                            <label for="umur">umur</label>
                            <input type="text" name="umur" class = "form-control" id="umur" placeholder="umur">
                        </div>
                        <div class="form-group">
                            <label for="partai_pendukung">Partai Pendukung</label>
                            <input type="text" name="partai_pendukung" class = "form-control" id="partai_pendukung" placeholder="Partai Pendukung">
                        </div>
                        <div class="form-group">
                            <label for="riwayat_pekerjaan">Riwayat Pekerjaan</label>
                            <input type="text" name="riwayat_pekerjaan" class = "form-control" id="riwayat_pekerjaan" placeholder="Riwayat Pekerjaan">
                        </div>
                        <a href="<?= site_url('Capres/index')?> " class ="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Calon Presiden</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
