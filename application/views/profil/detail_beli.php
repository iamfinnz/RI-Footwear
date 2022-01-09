<div class="container-fluid">
    <div class="clearfix">
        <div class="float-left">
	        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="float-right">
            <a href="<?= base_url('Profil/pembelian') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
        </div>
    </div>

	<div class="row">
		<div class="col-md-12">
			<?= $this->session->flashdata('message');
			?>
		</div>
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>No Pembelian</td>
						<td>Tanggal</td>
                        <td>Total</td>
						<td>Status</td>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
                    <?php foreach ($pembelian as $us) : ?>
                        <tr>
						    <td><?= $i; ?>.</td>
						    <td><?= $us['no_penjualan']; ?></td>
						    <td><?= $us['tanggal']; ?></td>
                            <td><?= $us['total_bayar']; ?></td>
						    <td><?= $us['status']; ?></td>
					    </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
				</tbody>
        </div>
        <form action="" method="POST">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>No Pembelian</td>
                            <td>Sepatu</td>
                            <td>Jumlah</td>
                            <td>Total</td>
                        </tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
                    <?php foreach ($detailbeli as $us) : ?>
                        <tr>
						    <td><?= $i;?>.</td>
						    <td><?= $us['no_penjualan']; ?></td>
						    <td><?= $us['nama_sepatu']; ?></td>
                            <td><?= $us['jumlah']; ?></td>
						    <td><?= $us['total']; ?></td>
					    </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
				</tbody>
			</table>
		</div>
        <div class="col-md-12">
            <input type="hidden" name="no_penjualan" value="<?= $us['no_penjualan']; ?>">
            <table class="table">
                <tr>
                    <td>Apakah Pesanan Sudah Anda Terima ?</td>
                    <td>
                        <select name="status" id="status" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="Diterima">Sudah</option>
                            <option value="Gagal">Belum</option>
                        </select>
                        <?= form_error('status','<small class="text-danger pl-3">','</small>'); ?>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary"><i class="fa a-save"></i>&nbsp;&nbsp;Ubah Status</button>
                    </td>
                </tr>
            </table>
        </div>
      </form>              
	</div>
</div>
