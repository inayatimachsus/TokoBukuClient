<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/images/icon.png"/>
  <title><?= $title ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/startbootstrap/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/startbootstrap/') ?>css/modern-business.css" rel="stylesheet">
  
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/fontawesome/') ?>css/all.min.css">
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="font-family: Arial Black;">
    <div class="container">
      <a class="navbar-brand font-weight-bold" href=""><img src="<?= base_url() ?>assets/images/icon.png" style="width:25px;">IMISTORE</a></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('AdminHome') ?>"><i class="fas fa-home"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('AdminReward') ?>"><i class="fas fa-percent"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('AdminMessage') ?>"><i class="far fa-envelope"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('AdminUser') ?>"><i class="fas fa-users-cog"></i></a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <?php if($this->session->userdata('nama')) { ?>

              <li class="nav-item active">
                <a class="nav-link" href="#">
                  Welcome, <?= $this->session->userdata('nama') ?>!
                </a>
              </li>

              <li clas="nav-item">
                <a class="nav-link" href="<?= base_url('Register/logout') ?>">
                <span class="btn btn-sm btn-outline-info"><i class="fas fa-sign-out-alt"></i></span>
              </li>
            </a>

          <?php } else { ?>
            <a class="nav-link" href="<?= base_url('Register/login') ?>">

              <li class="nav-item active">
              </li>

              <li class="nav-item">
                <span class="btn btn-sm btn-outline-success">Log In<i class="fas fa-sign-in-alt"></i></span>
              </li>
            </a>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>