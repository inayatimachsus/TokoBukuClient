<div class="container mt-5 mb-5">
    <h1 class="text-center text-success font-weight-bold p-5">USER <i class="fas fa-users"></i></h1>

    <?php if($this->session->flashdata('flash-data') ): ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data User berhasil <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>AdminUser/tambah" class="btn btn-primary" style="font-family: Bookman Old Style"> +Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search User" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        
        <table class="table table-secondary table-striped">
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Username</th>
                <th class="text-center">Password</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Email</th>
                <th class="text-center">No. Telepon</th>
                <th class="text-center">Gender</th>
                <th class="text-center">Golongan</th>
                <th class="text-center">Action</th>
            </tr>
            <?php 
                $no = 1;
                foreach ($user as $u) :
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $u['username'] ?></td>
                    <td><?php echo $u['password'] ?></td>
                    <td><?php echo $u['nama'] ?></td>
                    <td><?php echo $u['alamat'] ?></td>
                    <td><?php echo $u['email'] ?></td>
                    <td><?php echo $u['notelp'] ?></td>
                    <td><?php echo $u['gender'] ?></td>
                    <td><?php echo $u['golongan'] ?></td>
                    <td><a href="<?= base_url();?>AdminUser/hapus/<?= $u['id_user'];?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                    <a href="<?= base_url();?>AdminUser/edit/<?= $u['id_user'];?>" class="badge badge-info float-right">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
    <!-- /.row -->
    
</div>
<!-- container -->