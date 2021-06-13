<div class="container-fluid">
  <h4 align="center">KERANJANG BELANJA ANDA</h4><br>
  <table class="text-center table table-bordered table-striped table-hover">
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Sub-Total</th>
    </tr>
    <?php
    $no=1;
    foreach ($this->cart->contents() as $items) : ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td align="left"><?php echo $items['name'] ?></td>
        <td><?php echo $items['qty'] ?></td>
        <td align="left">IDR <?php echo number_format($items['price'], 0, ',','.') ?></td>
        <td align="left">IDR <?php echo number_format($items['subtotal'], 0, ',','.') ?></td>
      </tr>
    <?php endforeach ?>
    <tr>
      <td colspan="3"></td>
      <th>Total</th>
      <td align="left">IDR <?php echo number_format($this->cart->total(), 0, ',','.') ?></td>
    </tr>
  </table>
  <div align="right">
    <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
      <div class="btn btn-sm btn-danger"><i class="fas fa-times"></i> Hapus Keranjang</div></a>
    <a href="<?php echo base_url('welcome') ?>">
      <div class="btn btn-sm btn-primary"><i class="fas fa-redo"></i> Lanjutkan Belanja</div></a>
    <a href="<?php echo base_url('dashboard/pembayaran') ?>">
      <div class="btn btn-sm btn-success"><i class="fas fa-cash-register"></i> Pembayaran</div></a>
  </div>
</div>
