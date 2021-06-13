<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1 align="center">LAPORAN PENJUALAN TOKO MEBEL BERSAMA</h1>
    <table align="center" border="1" width="1500px">
      <tr align="center">
        <th>NO</th>
        <th>NAMA PEMESAN</th>
        <th>ALAMAT</th>
        <th>NO. TELEPON</th>
        <th>NAMA BARANG</th>
        <th width="35">JUMLAH</th>
        <th>HARGA</th>
        <th>SUBTOTAL</th>
      </tr>
      <?php
      $no=1;
      $total = 0;
      foreach ($pesanan as $psn):
        $subtotal = $psn->jumlah * $psn->harga;
        $total += $subtotal; ?>
      <tr>
        <td align="center"><?php echo $no++ ?></td>
        <td align="left"><?php echo $psn->nama ?></td>
        <td align="left"><?php echo $psn->alamat ?></td>
        <td align="left"><?php echo $psn->no_telp ?></td>
        <td align="left"><?php echo $psn->nama_barang ?></td>
        <td align="center"><?php echo $psn->jumlah ?></td>
        <td align="left">IDR <?php echo number_format($psn->harga, 0,',','.') ?></td>
        <td align="left">IDR <?php echo number_format($subtotal, 0,',','.') ?></td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="6"></td>
      <th>TOTAL</th>
      <td align="left">IDR <?php echo number_format($total, 0,',','.') ?></td>
    </tr>
    </table>
    <script type="text/javascript">
      window.print();
    </script>
  </body>
</html>
