<main id="main" class="main">
    <div class = "container-fluid">
      <h1 class = "h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
      <div class = "row">
          <div class = "col-md-6"><a href="<?=base_url("/Prodi/tambah")?>" class = "btn btn-info mb-2">Tambah Prodi</a></div>
        <div class = "col-md-12">
        <?= $this->session->flashdata('message'); ?>
          <table class = "table">
            <thead>
              <tr>
                <td>No</td>
                <td>Prodi</td>
                <td>Akreditasi</td>
                <td>Ruangan</td>
                <td>Kaprodi</td>
                <td>Gambar</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
              <?php foreach($prodi as $us): ?>
              <tr>
                <td><?= $i; ?>.</td>
                <td><?= $us['prodi']; ?></td>
                <td><?= $us['akreditasi']; ?></td>
                <td><?= $us['ruangan']; ?></td>
                <td><?= $us['kaprodi']; ?></td>
                <td><img src="<?= base_url('assets/assets/img/prodi/') . $us['gambar']; ?>" style="width:100px;" class="img-thumbnail"></td>
                <td>
                  <a href="<?=site_url("Prodi/hapus/")?><?= $us['id'] ?>" class = "btn btn-danger">Hapus</a>
                  <a href="<?=base_url("Prodi/edit/")?><?= $us['id'] ?>" class = "btn btn-warning">Edit</a>
                  <a href="<?=site_url("Prodi/detail/")?><?= $us['id'] ?>" class = "btn btn-info">Detail</a>
                </td>
              </tr>
              <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>  
      </div>
    </div>

  </main><!-- End #main -->