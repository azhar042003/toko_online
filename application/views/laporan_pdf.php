<!DOCTYPE html>
<html><head>
	<title></title>
</head><body>

	<table>
		<tr>
			<th>No</th>
			<th>Nma Barang</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stock</th>
		</tr>

		<?php
		$no= 1;
		foreach ($barang as $brg); ?>

		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $brg->nama_brg?></td>
			<td><?php echo $brg->keterangan?></td>
			<td><?php echo $brg->kategori?></td>
			<td><?php echo $brg->harga?></td>
			<td><?php echo $brg->stock?></td>

		</tr>
	<?php endforeach; ?>
	</table>

</body></html>