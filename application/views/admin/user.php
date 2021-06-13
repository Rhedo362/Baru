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
  <table id="contoh" class="display">
    <thead>
      <tr>
      <th>NO</th>
      <th>ID User</th>
      <th>Nama Pengguna</th>
      <th>Email</th>
      <th>Username</th>
      </tr>
    </thead>

  <tbody>
  <?php 
    $no=1;
    foreach($user as $p){ ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $p->id ?></td>
        <td><?php echo $p->nama ?></td>
        <td><?php echo $p->email ?></td>
        <td><?php echo $p->username ?></td>
        </tr>
  <?php } ?>
  </tbody>
  </table>
  </body>
</html>