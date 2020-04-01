<div class="container mt-5 mb-5">
    <h1 class="text-center text-success font-weight-bold p-5">FORM TAMBAH REWARD <i class="fas fa-crown ml-3"></i></h1>

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
                            <label for="code_reward">Code Reward</label>
                            <input type="text" class="form-control" id="code_reward" name="code_reward">
                        </div>
                        <div class="form-group">
                            <label for="nama_reward">Nama Reward</label>
                            <input type="text" class="form-control" id="nama_reward" name="nama_reward">
                        </div>
                        <div class="form-group">
                            <label for="diskon">Jumlah Diskon</label>
                            <input type="text" class="form-control" id="diskon" name="diskon">
                        </div>
                        <div class="form-group">
                            <label for="total_min">Total Minimal Belanja</label>
                            <input type="text" class="form-control" id="total_min" name="total_min">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah">
                        </div>
                        <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col md-2"></div>
    </div>
    
</div>
<!-- container -->