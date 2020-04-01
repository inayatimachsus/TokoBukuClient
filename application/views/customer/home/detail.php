<!-- Page Content -->
<div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Check Details
</h1>

<ol class="breadcrumb" style="background-color: #cce6ff;">
  <li class="breadcrumb-item">
      <a href="<?= base_url('Home') ?>">Home</a>
  </li>
  <li class="breadcrumb-item active">Detail Items</li>
</ol>

<!-- Portfolio Item Row -->
<div class="row">

<?php foreach ($detail as $dt) : ?>

  <div class="col-md-8">
    <img class="img-fluid" src="<?= base_url() ?>assets/images/<?= $dt['gambar'] ?>" style="width: 400px; height:460px;" alt="">
  </div>

  <div class="col-md-4">
    <h3 class="my-3"><?= $dt['judul_buku'] ?></h3>
    <h3 class="my-3">Detail Produk</h3>
    <table class="table">
        <tr>
            <th>Judul</th>
            <td><?= $dt['judul_buku'] ?></td>
        </tr>
        <tr>
            <th>Pengarang</th>
            <td><?= $dt['pengarang'] ?></td>
        </tr>
        <tr>
            <th>Penerbit</th>
            <td><?= $dt['penerbit'] ?></td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>Rp. <?= number_format($dt['harga'], 0,',','.') ?></td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                <?php
                    if($dt['stok'] == 0){
                        echo "Stok habis";
                    } else{
                        echo "Tersedia";
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <?php
                    if($dt['stok'] == 0){
                        echo "<span style='float: right;' class='btn btn-danger' disable>Kosong</span>";
                    } else{
                        echo anchor('Cart/tambah_ke_keranjang/'.$dt['id_buku'], 
                        '<button style="float: right;" type="button" class="btn btn-outline-info">Add to cart</button>');
                    }
                ?>
            </td>
        </tr>
    </table>
  </div>

  <?php endforeach; ?>

</div>
<!-- /.row -->

<!-- Related Projects Row -->
<h3 class="my-4">Foto Produk</h3>

<div class="row">

<?php foreach ($detail as $dt) : ?>

  <div class="col-md-3 col-sm-6 mb-4">
    <a href="#">
      <img class="img-fluid" src="<?= base_url() ?>assets/images/<?= $dt['gambar'] ?>" style="width: 100px; height:130px;"alt="">
    </a>
  </div>

<?php endforeach; ?>

</div>
<!-- /.row -->

</div>
<!-- /.container -->