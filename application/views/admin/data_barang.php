<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

<div class="dropdown inline">
  <button class="btn btn-warning mb-3 dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
   <i class="fa fa-download"></i> Export
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="<?php echo base_url('export/pdf') ?>">PDF</a></li>
    <li><a href="<?php echo base_url('export/excel') ?>">EXCEL</a></li>
  </ul>
</div>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php
		$no=1;
		foreach($barang as $brg) : ?>

		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brg->nama_brg ?></td>
			<td><?php echo $brg->keterangan ?></td>
			<td><?php echo $brg->kategori ?></td>
			<td><?php echo $brg->harga ?></td>
			<td><?php echo $brg->stock ?></td>
			<td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>

		</tr>

		<?php endforeach; ?>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?php echo base_url().'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/form-data">

		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" name="nama_brg" autocomplete="off" class="form-control">		
		</div>

		<div class="form-group">
			<label>Keterangan</label>
			<input type="text" name="keterangan" autocomplete="off" class="form-control">		
		</div>

		<div class="form-group">
			<label>Kategori</label>
			<select class="form-control" name="kategori" autocomplete="off">
				<option>Elektronik</option>
				<option>Pakaian Pria</option>
				<option>Pakaian Wanita</option>
				<option>Pakaian Anak-Anak</option>
				<option>Peralatan Olahraga</option>
				<option>Mainan</option>
			</select>		
		</div>

		<div class="form-group">
			<label>Harga</label>
			<input type="text" name="harga" autocomplete="off" class="form-control">		
		</div>

		<div class="form-group">
			<label>Stok</label>
			<input type="text" name="stock" autocomplete="off" class="form-control">		
		</div>

		<div class="form-group">
			<label>Gambar Produk</label>
			<input type="file" name="gambar" autocomplete="off" class="form-control">		
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

 	  </form>

    </div>
  </div>
</div>