<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <title>Koneksi Database ke Tabel</title>

<link rel="stylesheet" href="<?php echo base_url('DataTables-1.10.24/media/css/jquery.dataTables.min.css'); ?>" />

<script src="<?php echo base_url('DataTables-1.10.24/media/js/jquery.js'); ?>"></script>
 <script src="<?php echo base_url('DataTables-1.10.24/media/js/jquery.dataTables.min.js'); ?>"></script>
 
<script type="text/javascript">
 $(document).ready(function() {
 $('#contoh').dataTable();
 });
 </script>
 </head>

<body>
    <a href="<?php echo base_url('admin/invoice/print') ?>"><div class="btn btn-success btn-sm ml-2 mb-3"><i class="fas fa-print"></i> Print</div></a>
    <table id="contoh" class="display">
    <thead>
    <tr>
    <th>ID Invoice</th>
    <th>Nama Pemesan</th>
    <th>Alamat</th>
    <th>No Telpon</th>
    <th>Tanggal Pemesanan</th>
    <th>Batas Pembayaran</th>
    <th>Aksi</th>
    </tr>
    </thead>

    <tbody>
        <?php foreach($invoice as $p){ ?>
        <tr>
        <td><?php echo $p->id ?></td>
        <td><?php echo $p->nama ?></td>
        <td><?php echo $p->alamat ?></td>
        <td><?php echo $p->no_telp ?></td>
        <td><?php echo $p->tgl_pesan ?></td>
        <td><?php echo $p->batas_bayar ?></td>
        <td><?php echo anchor('admin/invoice/detail/'.$p->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</body>
</html>
</div>
