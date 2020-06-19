<!DOCTYPE html>
<html><head>
	<title></title>
	<style>
    body {
        font-family: sans-serif;
    }
    table, td, th {  
        border: 1px solid black;
        text-align: left;
    }
    table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 5px;
    }
    th, td {
        padding: 5px;
    }
    h3 {
        text-align: center;
    }
</style>
</head><body>

	<table>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stock</th>
		</tr>

		<?php
		$no= 1;
		foreach ($tb_barang as $brg) : ?>

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