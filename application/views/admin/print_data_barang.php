<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 align="center">LAPORAN DATA BARANG TOKO MEBEL BERSAMA</h1>
    <table align="center" border="1" width="1250px">
      <tr align="center">
        <th width="35px">NO</th>
        <th width="100px">ID BARANG</th>
        <th>NAMA BARANG</th>
        <th>KATEGORI</th>
        <th>HARGA</th>
        <th width="70px">STOK</th>
      </tr>
      <?php
      $no=1;
      foreach ($barang as $brg):
      ?>
      <tr>
        <td align="center"><?php echo $no++ ?></td>
        <td align="center"><?php echo $brg->id_barang ?></td>
        <td align="left"><?php echo $brg->nama_barang ?></td>
        <td align="left"><?php echo $brg->kategori ?></td>
        <td align="left">IDR <?php echo number_format($brg->harga, 0,',','.') ?></td>
        <td align="center"><?php echo $brg->stok ?></td>
      </tr>

    <?php endforeach; ?>
    </table>

    <script type="text/javascript">
      window.print();
    </script>
  </body>
</html>
