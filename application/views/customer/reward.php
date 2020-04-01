<!-- Page Content -->
<div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3 text-center text-success font-weight-bold p-5">REWARD <i class="fas fa-crown ml-3"></i>
</h1>

<ol class="breadcrumb" style="background-color: #cce6ff;">
  <li class="breadcrumb-item">
      <a href="<?= base_url('Home') ?>">Home</a>
  </li>
  <li class="breadcrumb-item active">Reward</li>
</ol>

<div class="row">
    <?php if (empty($reward)) : ?>
        <div class="alert alert-secondary" role="alert">
            Reward is empty.
        </div>
    <?php endif; ?>

    <?php foreach ($reward as $r) : ?>
  <div class="col-lg-6 portfolio-item">
    <div class="card h-100 bg-dark">
      <a href="#"><img class="card-img-top" src="<?= base_url() ?>assets/images/coupon.png ?>" style="width: 200px; display: block; margin: auto;" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
            <a class="text-info" href="#"><?= $r['nama_reward']?></a>
        </h4>
        <h5 class="text-secondary">Code : <?= $r['code_reward'] ?></h5>
        <div>
            <h5 class="text-secondary">Dapatkan diskon senilai Rp. <?= number_format($r['diskon'], 0,',','.') ?> dengan minimum pembelanjaan Rp. <?= number_format($r['total_min'], 0,',','.') ?></h5>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
  </div>
    <!-- /.row -->

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>

  </div>
  <!-- /.container -->