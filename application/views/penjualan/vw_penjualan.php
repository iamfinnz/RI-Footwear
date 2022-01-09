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
          <div class="float-left">
            <a href="<?= base_url('Penjualan/export') ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-file-pdf"></i>&nbsp;&nbsp;Export
            </a>
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Penjualan Sepatu</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <?= $this->session->flashdata('message');
          ?>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<td>No</td>
						<td>No Penjualan</td>
						<td>Tanggal</td>
                        <td>Pelanggan</td>
                        <td>Total</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
                    <?php foreach ($penjualan as $us) : ?>
                        <tr>
						    <td><?= $i;?>.</td>
						    <td><?= $us['no_penjualan']; ?></td>
						    <td><?= $us['tanggal']; ?></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['total_bayar']; ?></td>
						    <td><?= $us['status']; ?></td>
                            <td>
                                <a href="<?= base_url('Penjualan/detail/'). $us['no_penjualan']; ?>" class="btn btn-info">Detail</a>
                            </td>
					</tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
				</tbody>
			</table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->