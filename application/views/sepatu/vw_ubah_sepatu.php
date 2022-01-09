  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header justify-content-center">
                          Form Ubah Data Sepatu
                      </div>
                      <div class="card-body">
                          <form action="" method="POST">
                            <input type="hidden" name="id" value="<?= $sepatu['id']; ?>"> 
                              <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" name="nama" value="<?= $sepatu['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                                  <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                  <label for="merk">Merk Sepatu</label>
                                  <input type="text" name="merk" value="<?= $sepatu['merk']; ?>" class="form-control" id="merk" placeholder="Merk">
                                  <?= form_error('merk', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                  <label for="stok">Stok</label>
                                  <input type="text" name="stok" value="<?= $sepatu['stok']; ?>" class="form-control" id="stok" placeholder="Stok">
                                  <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                  <label for="harga">Harga</label>
                                  <input type="text" name="harga" value="<?= $sepatu['harga']; ?>" class="form-control" id="harga" placeholder="Harga">
                                  <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                                  <label for="ukuran">Ukuran</label>
                                  <input type="text" name="ukuran" value="<?= $sepatu['ukuran']; ?>" class="form-control" id="ukuran" placeholder="Ukuran">
                                  <?= form_error('ukuran', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                              <div class="form-group">
                              <img src="<?= base_url('assets/dist/img/sepatu/') . $sepatu['gambar']; ?>" style="width:100px" class="img-thumbnail">
							        <div class="custom-file">
								        <input type="file" class="custom-file-input" name="gambar" id="gambar">
								        <label for="gambar" class="custom-file-label">Choose File</label>
							        </div>
						        </div>
                                <a href="<?= base_url('Sepatu') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Sepatu</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
    </div>
</div>