<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php
            $grand_total = 0;
            if($keranjang = $this->cart->contents())
              {
                foreach($keranjang as $item)
                {
                    $grand_total = $grand_total + $item['subtotal'];
                }
                echo "<h2>Total belanjaan anda: IDR ".number_format($grand_total,0,',','.');
             ?>
        <br>
          <h3>Masukkan data untuk pengiriman dan pembayaran</h3>
          <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
              <div class="from-group">
                  <label>Nama lengkap</label>
                  <input type="text" name="nama" placeholder="Nama lengkap anda" class="form-control">
              </div><br>
              <div class="from-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" placeholder="Alamat lengkap anda" class="form-control">
              </div><br>
              <div class="from-group">
                  <label>No. Telpon</label>
                  <input type="text" name="no_telp" placeholder="Nomor telepon anda" class="form-control">
              </div><br>
              <div class="from-group">
                  <label>Jasa Pengiriman</label>
                  <select class="form-control">
                    <option>JNE</option>
                    <option>J&T</option>
                    <option>Tiki</option>
                    <option>POS Indonesia</option>
                  </select>
              </div><br>
              <div class="from-group">
                  <label>Bank</label>
                  <select class="form-control">
                    <option>BNI - xxxxxxxxxx</option>
                    <option>BRI - xxxxxxxxxx</option>
                    <option>BCA - xxxxxxxxxx</option>
                    <option>Mandiri - xxxxxxxxxx</option>
                  </select>
              </div><br>
              <?php echo anchor('dashboard/detail_keranjang','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
              <button type="submit" class="btn btn-sm btn-primary ml-2">Pesan</button>
          </form>
          <?php
            }else{
              echo "<h4>Keranjang belanja anda masih kosong";
              echo anchor('welcome','<div class="btn btn-lg btn-warning ml-3">Mulai Belanja</div>');
            }
          ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
