<style>
  .row .card:hover{
    box-shadow: 10px 10px 10px rgba(0,0,0,0,1.02);
    transform: scale(1.05);
  }
  </style>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('<?= base_url() ?>assets/images/img1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="font-family: Cooper Black;">LOGIN FOR YOUR REWARD!!!</h3>
            <button type="button" class="btn btn-sm btn-light" href="<?= base_url('Register/login') ?>">Log In</span>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?= base_url() ?>assets/images/img2.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3 style="font-family: Cooper Black;">LOGIN FOR YOUR REWARD!!!</h3>
            <button type="button" class="btn btn-sm btn-light" href="<?= base_url('Register/login') ?>">Log In</span>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?= base_url() ?>assets/images/img3.jpg')">
          <div class="carousel-caption d-none d-md-block">
          <h3 style="font-family: Cooper Black;">LOGIN FOR YOUR REWARD!!!</h3>
            <button type="button" class="btn btn-sm btn-light" href="<?= base_url('Register/login') ?>">Log In</span>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <!-- Portfolio Section -->
    <h1 class="my-4 text-center text-success font-weight-bold mt-5 mb-4">NEW PRODUCT CHECK <img src="<?= base_url() ?>assets/images/centang.png" style="width: 40px;"></h1>
    
    <div class="row">

    <?php foreach ($buku as $b) : ?>

      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?= base_url() ?>assets/images/<?= $b['gambar'] ?>" style="width: 200px; height:230px; display: block; margin: auto;" alt=""></a>          <div class="card-body">
            <h5 class="card-title">
                <a class="text-info" href="<?= base_url('home/detail/').$b['id_buku'] ?>"><?= $b['judul_buku']?></a>
            </h5>
            <p class="text-secondary">Rp. <?= number_format($b['harga'], 0,',','.') ?></p>
            <div>
                <small class="text-success">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <?php
                if($b['stok'] == 0){
                    echo "<span class='btn btn-danger float-right' disable>Kosong</span>";
                } else{
                    echo anchor('Cart/tambah_ke_keranjang/'.$b['id_buku'], 
                    '<button type="button" class="btn btn-outline-dark float-right">Add to cart</button>');
                }
                ?>
            </div>
          </div>
        </div>
      </div>
      
    <?php endforeach; ?>

    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>IMI Store</h2>
        <p>
                Kami hadir melayani para pecinta buku Indonesia sejak tahun 2039
            </p>
            <p>
                IMI Store (dibaca ai em ai stor) berawal dari sebuah tugas Pemrograman Web Lanjut yang dibuat dengan gaya semoga kreatif mencari sumber kesana-kemari dan akhirnya muncullah ide-ide yang tertuang pada website ini:)
            </p>
            <p>
                Kata IMI sendiri awalnya adalah singkatan dari nama saya. Tetapi pada hal ini saya mengartikannya sebagai I'm I dalam bahasa inggris yaitu maksudnya adalah Saya adalah Saya. Entah bagaimanapun dunia ini kita adalah diri kita sendiri yang patut dicintai.
            </p>
            <p>
                Jam Layanan Kami :
                <ul></ul>
                <li>Senin - Jumat : 09.00 WIB - 22.00 WIB</li>
                <li>Sabtu : 09.00 WIB - 17.00 WIB</li>
                <li>Hari besar TUTUP</li>
            </p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" style="display: block; margin: auto;" src="<?= base_url() ?>assets/images/instagram.jpg" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Hubungi Kami</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="<?= base_url('Contact') ?>">Contact</a>
      </div>
    </div>

  </div>
  <!-- /.container -->
