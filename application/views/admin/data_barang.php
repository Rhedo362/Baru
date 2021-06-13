<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Koneksi Database ke Tabel</title>
    <h4 align="center" class="mb-3">MANAJEMEN PRODUK</h4>
    <link rel="stylesheet" href="<?php echo base_url('DataTables-1.10.24/media/css/jquery.dataTables.min.css'); ?>" />
    <script src="<?php echo base_url('DataTables-1.10.24/media/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('DataTables-1.10.24/media/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>
    <script src="DataTables-1.10.24/media/css/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    $('#contoh').dataTable();
    });
    </script>
    </head>
    <button class="btn btn-sm btn-primary ml-2 mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
<body>
    <a href="<?php echo base_url('admin/data_barang/print_barang') ?>"><div class="btn btn-success btn-sm ml-2 mb-3"><i class="fas fa-print"></i> Print</div></a>
    <table id="contoh" class="table table-bordered table-striped">
    <thead>
    <tr align="center">
        <th>NO</th>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Keterangan</th>
        <th>Kategori</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    $no=1;
    foreach($barang as $p){ ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $p->id_barang ?></td>
        <td><?php echo $p->nama_barang ?></td>
        <td><?php echo $p->keterangan ?></td>
        <td><?php echo $p->kategori ?></td>
        <td><?php echo $p->stok ?></td>
        <td>IDR <?php echo number_format($p->harga, 0, ',','.') ?></td>
        <td class="text center". width="160px">
            <?php echo anchor('admin/data_barang/detail_admin/' .$p->id_barang,
            '<div class="btn btn-success btn-sm ml-4"><i class="fa fa-search"></i></div>')?>
            <?php echo anchor('admin/data_barang/edit/' .$p->id_barang,
            '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
            <?php echo anchor('admin/data_barang/hapus/' .$p->id_barang,
            '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
        </td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label>Id Barang</label>
            <input type="text" name="id_barang" class="form-control">
          </div>

          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control">
          </div>

          <div class="form-group">
            <label>Kategori</label>
            <input type="text" name="kategori" class="form-control">
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
          </div>

          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control">
          </div>

          <div class="form-group">
            <label>Gambar Produk</label><br>
            <input type="file" name="gambar" class="form-control">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>

    </div>
  </div>
</div>
</body>
</html>