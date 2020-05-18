<style type="text/css">
  .container-fluid {
    padding-bottom: 300px;
  }

</style>


<div class="container-fluid">
	
	<div class="card">
  		<h5 class="card-header">Hasil Pencarian</h5>
  		<div class="card-body">

		 <?php foreach($barang as $brg): ?>
      <form method="post" action="<?php echo base_url().'dashboard/detail_barang' ?>">
   		 <div class="row">
   		 	<div class="col-md-4">
   		 			<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
   		 	</div>
   		 	<div class="col-md-8">
            <table class="table">
              <div class="for-group">
                 <label>Nama Barang</label>
                 <input type="text" name="nama" autocomplete="off" class="form-control"
                 value="<?php echo $brg->nama_brg ?>"> 
              </div>

              <div class="for-group">
                 <label>Keterangan</label>
                 <input type="text" name="nama" autocomplete="off" class="form-control"
                 value="<?php echo $brg->keterangan ?>"> 
              </div>

              <div class="for-group">
                 <label>Kategori</label>
                 <input type="text" name="nama" autocomplete="off" class="form-control"
                 value="<?php echo $brg->kategori ?>"> 
              </div>

              <div class="for-group">
                 <label>stock</label>
                 <input type="text" name="nama" autocomplete="off" class="form-control"
                 value="<?php echo $brg->stock ?>"> 
              </div>

              <tr>
                <td>Harga</td>
                <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga,0,',','. ') ?></div></strong></td>
              </tr>
            </table> 
        </div>
      </form>

   		 </div>
   		<?php endforeach; ?>
		</div>
	</div>
</div>