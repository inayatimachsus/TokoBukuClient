<div class="container mt-5 mb-5">
    <h1 class="text-center text-success font-weight-bold p-5">REWARD <i class="fas fa-crown ml-3"></i></h1>

    <?php if($this->session->flashdata('flash-data') ): ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Reward berhasil <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>AdminReward/tambah" class="btn btn-primary" style="font-family: Bookman Old Style"> +Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Reward" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        
            <!-- alert -->
            <?php if (empty($reward)) : ?>
                <div class="alert alert-secondary" role="alert">
                    Reward is empty.
                </div>
            <?php endif; ?>

            <?php foreach ($reward as $r) : ?>
                <div class="col-lg-6 col-md-12 mb-4">
                <div class="card h-100 bg-dark m-5">
                    <a href="#"><img class="card-img-top" src="<?= base_url() ?>assets/images/coupon.png ?>" style="width: 200px; height:230px; display: block; margin: auto;" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                        <a class="text-info" href="#"><?= $r['nama_reward']?></a>
                        </h4>
                        <h5 class="text-secondary">Code : <?= $r['code_reward'] ?></h5>
                        <h5 class="text-secondary">Dapatkan diskon senilai Rp. <?= number_format($r['diskon'], 0,',','.') ?> dengan minimum pembelanjaan Rp. <?= number_format($r['total_min'], 0,',','.') ?></h5>
                    </div>
                    <div class="card-footer bg-light">
                        <a href="<?= base_url();?>AdminReward/edit/<?= $r['code_reward'];?>" class="badge badge-info float-right">Edit</a>
                        <a href="<?= base_url();?>AdminReward/hapus/<?= $r['code_reward'];?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                    </div>
                </div>
                </div>
            <?php endforeach; ?>

    </div>
    <!-- /.row -->
    
</div>
<!-- container -->