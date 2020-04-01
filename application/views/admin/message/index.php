<div class="container mt-5 mb-5">
    <h1 class="text-center text-success font-weight-bold p-5">MESSAGE <i class="fas fa-comments ml-3"></i></h1>

    <?php if($this->session->flashdata('flash-data') ): ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Pesan berhasil <?= $this->session->flashdata('flash-data');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Message" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row mt-3" style="font-family: Candara;">

        <table class="table table-secondary table-striped">
            <tr>
                <th class="text-center">No.</th>
                <th class="text-center">Nama Pengirim</th>
                <th class="text-center">Isi Pesan</th>
                <th class="text-center">Action</th>
            </tr>
            <?php 
                $no = 1;
                foreach ($pesan as $p) :
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p['sender'] ?></td>
                    <td><?php echo $p['message'] ?></td>
                    <td><a href="<?= base_url();?>AdminMessage/hapus/<?= $p['id_pesan'];?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<!-- container -->