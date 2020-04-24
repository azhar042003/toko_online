<style type="text/css">
  .container-fluid {
    padding-bottom: 300px;
  }

</style>


<div class="container-fluid">
	
	<div class="card">
  		<h5 class="card-header">Profile</h5>
  		<div class="card-body">

		 <?php foreach ?>
   		 <div class="row">
   		 	<div class="col-md-4">
   		 			<img src="<?php echo base_url('assets/img/gambar012.jpg') ?>" class="card-img-top">
   		 	</div>
   		 	<div class="col-md-8">
            <table class="table">
              <tr>
                <td>Nama</td>
                <td><strong><?php if($this->session->userdata('username')) { ?></strong></td>
              </tr>

              <tr>
                <td>Alamat</td>
                <td><strong></strong></td>
              </tr>

              <tr>
                <td>No.Telepon</td>
                <td><strong></strong></td>
              </tr>
            </table> 
        </div>

   		 </div>
   		<?php endforeach; ?>
		</div>
	</div>
</div>