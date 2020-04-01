<div class="container-fluid mt-5 mb-5">
    <h2 class="text-center font-weight-bold p-5">Form Pembayaran</h2>

    <div class="row ml-5 mr-5">
        <div class="col-md-2">
        
        </div>

        <div class="col-md-8">
            <ol class="breadcrumb" style="background-color: #cce6ff;">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('Home') ?>">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?= base_url('Cart/detail') ?>">Cart</a>
                </li>
                <li class="breadcrumb-item active">Form Pembayaran</li>
            </ol>

            <p><?= $this->session->flashdata('pesan'); ?></p>
            <p><br><br></p>
            <div class="btn btn-sm btn-secondary">
                <?php 
                    $grand_total = 0;
                    if($keranjang = $this->cart->contents()) {
                        foreach ($keranjang as $item)
                        {
                            $grand_total += $item['subtotal'];
                        }
                        echo "Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
                    } else {
                        echo "Keranjang belanja Anda masih kosong";
                    }
                ?>
            </div><br><br>
            <h5>Input Alamat Penigiriman dan Pembayaran</h5>
            <form method="POST" action="">
                <div class="fom-group">
                    <label for="nama">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" id="nama">
                    <?= form_error('nama','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="fom-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <input class="form-control" type="text" name="alamat" id="alamat">
                    <?= form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="fom-group">
                    <label for="notelp">No. Telepon</label>
                    <input class="form-control" type="text" name="notelp" id="notelp">
                    <?= form_error('notelp','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="fom-group">
                    <label for="jasa_pengiriman">Jasa Pengiriman</label>
                    <select class="form-control" id="jasa_pengiriman" name="jasa_pengiriman">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>Pos Indonesia</option>
                        <option>Gojek</option>
                        <option>Grab</option>
                    </select>
                    <?= form_error('jasa_pengiriman','<div class="text-small text-danger">','</div>') ?>
                </div>

                <div class="fom-group">
                    <label for="bank">Melalui BANK</label>
                    <select class="form-control" id="bank" name="bank">
                        <option>BRI - 167188929197</option>
                        <option>BNI - 167188929197</option>
                        <option>BCA - 167188929197</option>
                        <option>MANDIRI - 167188929197</option>
                    </select>
                    <?= form_error('bank','<div class="text-small text-danger">','</div>') ?>
                </div>
                
                <?php
                if($keranjang = $this->cart->contents()) {
                    echo "<button type='submit' class='btn btn-sm btn-success mb-3 mt-3'>Pesan Sekarang</button>";
                } else {
                    echo "<button type='button' class='btn btn-sm btn-secondary mb-3 mt-3'>Pesan Sekarang</button>";
                }
                ?>
            </form>
        </div>

        <div class="col-md-2">
        
        </div>
    </div>
</div>