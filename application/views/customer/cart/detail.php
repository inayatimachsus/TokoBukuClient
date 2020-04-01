<div class="container mt-5 mb-5">
    <h1 class="text-center text-success font-weight-bold p-5">CART <i class="fas fa-cart-arrow-down ml-3"></i></h1>

    <ol class="breadcrumb" style="background-color: #cce6ff;">
        <li class="breadcrumb-item">
            <a href="<?= base_url('Home') ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Cart</li>
    </ol>

    <div class="row mt-3" style="font-family: Candara;">
        <table class="table table-secondary table-striped">
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Judul Buku</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Subtotal</th>
            </tr>
            <?php 
                $no = 1;
                foreach ($this->cart->contents() as $items) :
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td><?php echo $items['qty'] ?></td>
                    <td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                    <td align="right">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4" align="right">Total</td>
                <td align="right">Rp. <?= number_format($this->cart->total(), 0,',','.') ?></td>
            </tr>
        </table>

        <div>
            <a href="<?= base_url('Cart/pembayaran') ?>">
                <div class="btn btn-sm btn-dark">Pembayaran</i></div>
            </a>
            <a href="<?= base_url('Cart/hapus_keranjang') ?>">
                <div class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></div>
            </a>
        </div>
    </div>
</div>
<!-- container -->