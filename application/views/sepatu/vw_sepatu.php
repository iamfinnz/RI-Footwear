  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Halaman Sepatu</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="col-md-6"><a href="<?= base_url(); ?>Sepatu/tambah" class="btn btn-info mb-2">Tambah Sepatu</a></div>
    <br>

      <!-- Default box -->
      <div class="card">
        <div class="card-header"></div>
          <!-- /.card-header -->
          <div class="card-body">
          
          <?= $this->session->flashdata('message');
          ?>
          <table id="tabelsepatu" class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>No</td>
                <td>Gambar</td>
                <td>Nama</td>
                <td>Merk</td>
                <td>Stok</td>
                <td>Harga</td>
                <td>Ukuran</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($sepatu as $us) : ?>
              <tr>
                <td><?= $i; ?></td>
                <td><img src="<?= base_url('assets/dist/img/sepatu/') . $us['gambar']; ?>" style="width:100px" class="img-thumbnail"></td>
                <td><?= $us['nama']; ?></td>
                <td><?= $us['merk']; ?></td>
                <td><?= $us['stok']; ?></td>
                <td><?= $us['harga']; ?></td>
                <td><?= $us['ukuran']; ?></td>
                <td>
                <a href="<?= base_url('Sepatu/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                <a href="<?= base_url('Sepatu/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
              </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>

