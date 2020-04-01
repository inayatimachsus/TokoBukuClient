  <style>
  .row .card:hover{
    box-shadow: 10px 10px 10px rgba(0,0,0,0,1.02);
    transform: scale(1.02);
  }
  </style>
  
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3" style="font-family: Berlin Sans FB;">

        <h1 class="my-4 text-info">IMI Store</h1>
        <div class="list-group">
          <h5 class="list-group-item text-sencondary font-weight-bold"><i class="fas fa-clipboard-list"></i>  Menu</h5>
          <a href="<?= base_url('AdminHome') ?>" class="list-group-item">Home</a>
          <a href="<?= base_url('AdminReward') ?>" class="list-group-item">Reward</a>
          <a href="<?= base_url('AdminMessage') ?>" class="list-group-item">Message</a>
          <a href="<?= base_url('AdminUser') ?>" class="list-group-item">User</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?= base_url() ?>assets/images/img1.jpg" style="width: 1000px; height: 400px;" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url() ?>assets/images/img2.jpg" style="width: 1000px; height: 400px;" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url() ?>assets/images/img3.jpg" style="width: 1000px; height: 400px;" alt="Third slide">
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

        <h3 class="text-center text-success font-weight-bold mt-5 mb-4">PRODUCT CHECK <img src="<?= base_url() ?>assets/images/centang.png" style="width: 40px;"></h3>

        <div class="row">
        <?php foreach ($buku as $b) : ?>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 bg-dark">
              <a href="#"><img class="card-img-top" src="<?= base_url() ?>assets/images/<?= $b['gambar'] ?>" style="width: 200px; height:230px; display: block; margin: auto;" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a class="text-info" href="<?= base_url('AdminHome/detail/').$b['id_buku'] ?>"><?= $b['judul_buku']?></a>
                </h4>
                <h5 class="text-secondary">Rp. <?= number_format($b['harga'], 0,',','.') ?></h5>
              </div>
              <div class="card-footer bg-light">
                <small class="text-success">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        
        <?php endforeach; ?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->