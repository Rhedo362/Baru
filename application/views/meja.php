<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slider3.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/slider4.jpg') ?>" class="d-block w-100" alt="...">
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
        <?php foreach ($meja as $brg) : ?>

          <div class="card ml-5 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/Uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title mb-1"><?php echo $brg->nama_barang ?></h5>
              <small><?php echo $brg->keterangan ?></small><br>
              <span class="badge badge-danger mb-3">IDR <?php echo number_format($brg->harga, 0, ',','.') ?></span><br>
              <?php echo anchor('dashboard/masukkan_keranjang/'.$brg->id_barang,'<div class="btn btn-sm btn-primary">Masukkan Keranjang</div>') ?>
              <?php echo anchor('dashboard/detail/'.$brg->id_barang,'<div class="btn btn-sm btn-success">Detail</div>') ?>
            </div>
          </div>
        <?php endforeach ?>
    </div>
</div>
