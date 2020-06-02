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
      <form method="post" action="<?php echo base_url().'Welcome/detail_barang' ?>">
   		 <div class="row">
   		 	<div class="col-md-4">
   		 			<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
   		 	</div>
   		 	<div class="col-md-8">
            <table class="table">
              <tr>
               <td>Nama Produk</td>
               <td><strong><?php echo $brg->nama_brg ?></strong></td>
              </tr>

               <tr>
                <td>Keterangan</td>
                <td><strong><?php echo $brg->keterangan ?></strong></td>
               </tr>

               <tr>
                <td>Kategori</td>
                <td><strong><?php echo $brg->kategori ?></strong></td>
               </tr>

               <tr>
                <td>Stok</td>
                <td><strong><?php echo $brg->stock ?></strong></td>
               </tr>

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