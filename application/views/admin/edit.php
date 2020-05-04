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
				<input type="hidden" name="id_brg" autocomplete="off" class="form-control"
				value="<?php echo $inv->id_brg ?>">	
			</div>

			<div class="for-group">
				<label>Kategori</label>
				<input type="text" name="kategori" autocomplete="off" class="form-control"
				value="<?php echo $inv->kategori ?>">	
			</div>

			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" autocomplete="off" class="form-control"
				value="<?php echo $brg->harga ?>">	
			</div>

			<div class="for-group">
				<label>Stok</label>
				<input type="text" name="stock" autocomplete="off" class="form-control"
				value="<?php echo $brg->stock ?>">	
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

		</form>

	<?php endforeach; ?>
</div>