<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="<?= base_url() ?>assets/images/icon.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-success">
              <div class="card-header"><h4>Registration</h4></div>

              <div class="card-body">
                <form method="POST" action="<?= base_url('Register') ?>">
                <div class="form-divider">
                    Account
                </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username" autofocus>
                      <?= form_error('username','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                      <?= form_error('password','<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                <div class="form-divider">
                  Data
                </div>  
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama">
                  <?= form_error('nama','<div class="text-small text-danger">','</div>') ?>
                </div>
                  
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                    <?= form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                  </div>

                  <div class="row">
                  <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" autofocus>
                      <?= form_error('email','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="notelp">No. Telepon</label>
                      <input id="notelp" type="text" class="form-control" name="notelp" autofocus>
                      <?= form_error('notelp','<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="gender">Gender</label>
                      <select class="form-control selectric" id="gender" name="gender">
                        <option value="">Pilih Gender</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                      <?= form_error('gender','<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                    </div>
                  </div>

                  <div class="form-group">
                  <button type="submit" class="btn btn-success btn-lg btn-block">
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
                <a> Already have an account? </a>
                <a href="Auth/login"> Login Here </a>
            </div>
            <div class="simple-footer">
              Copyright &copy; Stisla 2018 Modif By @inayatii_
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
