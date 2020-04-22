<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

				echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>

			<h3>Input Alamat Pengiriman Dan Pembayaran</h3>

			 <form method="post" action="<?php echo base_url() ?>dashboard/pesanan">

			 	<div class="form-group">
			 		<label>Nama Lengkap</label>
			 		<input type="text" name="nama" autocomplete="off" placeholder="Nama Lengkap Anda" class="form-control">
			 	</div>

			 	<div class="form-group">
			 		<label>Alamat Lengkap</label>
			 		<input type="text" name="alamat" autocomplete="off" placeholder="Alamat Lengkap Anda" class="form-control">
			 	</div>

			 	<div class="form-group">
			 		<label>No. Telepon</label>
			 		<input type="text" name="no_telp" autocomplete="off" placeholder="Nomor Telepon Anda" class="form-control">
			 	</div>

			 	<div class="form-group">
			 		<label>Jasa Pengiriman</label>
			 		<select class="form-control">
			 			<option>JNE</option>
			 			<option>TIKI</option>
			 			<option>Pos Indonesia</option>
			 			<option>Gojek</option>
			 			<option>Grab</option>
			 		</select>
			 	</div>

			 	<div class="form-group">
			 		<label>Pilih Bank</label>
			 		<select class="form-control">
			 			<option>BCA - xxxxxxx</option>
			 			<option>BNI - xxxxxxx</option>
			 			<option>BRI - xxxxxxx</option>
			 			<option>MANDIRI - xxxxxxx</option>
			 		</select>
			 	</div>

			 	<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
			 	
			 </form>

			 <?php 
		}	else
		{
			echo " <h4>Keranjang Anda Masih Kosong";
		}
			  ?>
		</div>


		<div class="col-md-2"></div>
	</div>
</div>