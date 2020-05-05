<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>Edit Invoice Pemesanan</h3>

	<?php foreach($invoice as $inv) : ?>
		<form method="post" action="<?php echo base_url().'admin/invoice/update' ?>">

			<div class="for-group">
				<label>Nama Pemesanan</label>
				<input type="text" name="nama" autocomplete="off" class="form-control"
				value="<?php echo $inv->nama ?>">	
			</div>

			<div class="for-group">
				<label>Alamat</label>
				<input type="hidden" name="alamat" autocomplete="off" class="form-control"
				value="<?php echo $inv->alamat ?>">	
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

		</form>

	<?php endforeach; ?>
</div>