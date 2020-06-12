<style type="text/css">
  .navbar-custom-menu {
    margin-left: 1050px;

  }
</style>
<?php
if( isset($_POST["pencarian"]) ) {
    $nama_brg = cari($_POST["keyword"]);
}

?>
 <div class="container-fluid">

    

     <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <svg class="bi bi-person-fill" width="2em" height="2em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                 <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"/>
              </svg>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                
              <li>
                <?php echo $this->session->userdata('username') ?>
              </li>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php ('cekprofil/index') ?>">Profile</a>
                </div>
                <div class="pull-right">
                  <?php if($this->session->userdata('username')) { ?>
                    <li><?php echo anchor('auth/logout','Logout') ?></li>
                  <?php } else { ?>
                    <li><?php echo anchor('auth/login','Login'); ?></li>

                  <?php } ?>

                </div>
              </li>
            </ul>
          </li>
        </ul>
      <div class="row">
        <div class="col-md-4">
          <form action="" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" autofocus placeholder="Search keyword.." autocomplete="off" >
              <button type="submit" name="cari">Cari</button>
          </div>
        </form>
        </div>  
      </div>
      </div>







    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <div class="row text-center mt-4">

        <?php foreach ($barang as $brg) : ?>

        <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-tittle mb-1"><?php echo $brg->nama_brg ?></h5>
              <small><?php echo $brg->keterangan ?></small><br>
              <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0,',','.')  ?></span>
              <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
              <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>') ?>    
          </div>
        </div>

        <?php endforeach; ?>
    </div>
  </div>