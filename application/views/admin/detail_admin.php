<div class="container-fluid">
  <div class="card">
    <div class="card-header">Detail Barang</div>
    <div class="card-body">
      <?php foreach ($barang as $brg): ?>
      <div class="row">
        <div class="col-md-4">
          <img src="<?php echo base_url('Uploads/').$brg->gambar ?>" class="card-img-top">
        </div>
        <div class="col-md-8">
          <table class="table">
              <tr>
                <td>Nama Produk</td>
                <td><strong><?php echo $brg->nama_barang ?></strong></td>
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
                <td><strong><?php echo $brg->stok ?></strong></td>
              </tr>
              <tr>
                <td>Harga</td>
                <td><strong><div class="btn btn-success">IDR <?php echo number_format($brg->harga, 0,',','.') ?></div></strong></td>
              </tr>
          </table>
          <?php echo anchor('admin/dashboard_admin','<div class="btn btn-sm btn-primary">Kembali ke Dashboard</div>') ?>
          <?php echo anchor('admin/data_barang','<div class="btn btn-sm btn-danger">Kembali ke Data Barang</div>') ?>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
