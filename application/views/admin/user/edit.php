<div class="container mt-5 mb-5">
    <h1 class="text-center text-success font-weight-bold p-5">FORM EDIT USER <i class="fas fa-users"></i></h1>

    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card bg-secondary m-5">
                
                <div class="card-body">
                <!-- untuk menampilkan pesan error -->
                <?php if (validation_errors()):?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
                <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'];?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?= $user['password'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'];?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $user['alamat'];?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'];?>">
                        </div>
                        <div class="form-group">
                            <label for="notelp">No. Telepon</label>
                            <input type="text" class="form-control" id="notelp" name="notelp" value="<?= $user['notelp'];?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Gender</label>
                            <select class="form-control selectric" id="gender" name="gender" value="<?= $user['gender'];?>">
                                <option value="">Pilih Gender</option>
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="golongan">Golongan</label>
                            <select class="form-control selectric" id="golongan" name="golongan" value="<?= $user['golongan'];?>">
                                <option value="">Pilih Golongan</option>
                                <option>admin</option>
                                <option>customer</option>
                            </select>
                        </div>
                        <div class="card-footer">
                        <button type="submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                        </div>
                    </form>
                </div>
                <!-- card-body -->
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    
</div>
<!-- container -->