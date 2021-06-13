<div class="container_fluid">
  <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice: <?php echo $invoice->id ?></div></h4><br>
  <table class="text-center table table-bordered table-hover table-striped">
    <tr>
      <th>ID INVOICE</th>
      <th>NAMA PEMESAN</th>
      <th>USERNAME</th>
      <th>ALAMAT</th>
      <th>NO. TELEPON</th>
      <th>ID BARANG</th>
      <th>NAMA BARANG</th>
      <th>JUMLAH</th>
      <th>HARGA</th>
      <th>SUB-TOTAL</th>
    </tr>
    <?php
    $total = 0;
    foreach($pesanan as $psn):
      $subtotal = $psn->jumlah * $psn->harga;
      $total += $subtotal;
    ?>
    <tr>
      <td><?php echo $psn->id_invoice ?></td>
      <td align="left"><?php echo $psn->nama ?></td>
      <td><?php echo $psn->username ?></td>
      <td align="left"><?php echo $psn->alamat ?></td>
      <td align="left"><?php echo $psn->no_telp ?></td>
      <td align="left"><?php echo $psn->id_barang ?></td>
      <td align="left"><?php echo $psn->nama_barang ?></td>
      <td><?php echo $psn->jumlah ?></td>
      <td align="left">IDR <?php echo number_format($psn->harga, 0,',','.') ?></td>
      <td align="left">IDR <?php echo number_format($subtotal, 0,',','.') ?></td>
    </tr>
  <?php endforeach; ?>
  <tr>
    <td colspan="8"></td>
    <th>TOTAL</th>
    <td align="left">IDR <?php echo number_format($total, 0,',','.') ?></td>
  </tr>
  </table>
  <a href="<?php echo base_url('admin/invoice/index') ?>"><div class="btn btn-sm btn-primary ml-3 mb-3"><i class="fas fa-arrow-left"></i> Kembali</div></a>
</div>
