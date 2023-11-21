<main id="main" class="main">
    <div class = "container-fluid">
      <h1 class = "h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
      <div class = "row">
          <div class = "col-md-6"><a href="<?=base_url("/Barang/tambah")?>" class = "btn btn-info mb-2">Tambah Barang</a></div>
        <div class = "col-md-12">
        <?= $this->session->flashdata('message'); ?>
          <table class = "table">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama Barang</td>
                <td>Kategori Barang</td>
                <td>Stok Barang</td>
                <td>Harga Barang</td>
                <td>Gambar</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
              <?php foreach($barang as $us): ?>
              <tr>
                <td><?= $i; ?>.</td>
                <td><?= $us['nama']; ?></td>
                <td><?= $us['kategori']; ?></td>
                <td><?= $us['stok']; ?></td>
                <td><?= $us['harga']; ?></td>
                <td><img src="<?= base_url('assets/assets/img/barang/') . $us['gambar']; ?>" style="width:100px;" class="img-thumbnail"></td>
                <td>
                  <a href="<?=site_url("Barang/hapus/")?><?= $us['id'] ?>" class = "btn btn-danger">Hapus</a>
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