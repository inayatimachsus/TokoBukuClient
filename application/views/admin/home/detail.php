<div class="container mt-5 mb-5">

    <div class="card">
        <div class="card-body">
            <?php foreach ($detail as $dt) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <img style="width: 300px;" src="<?= base_url() ?>assets/images/<?= $dt['gambar'] ?>">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>Judul</th>
                                <td><?= $dt['judul_buku'] ?></td>
                            </tr>
                            <tr>
                                <th>Pengarang</th>
                                <td><?= $dt['pengarang'] ?></td>
                            </tr>
                            <tr>
                                <th>Penerbit</th>
                                <td><?= $dt['penerbit'] ?></td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>Rp. <?= number_format($dt['harga'], 0,',','.') ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <?php
                                        if($dt['stok'] == 0){
                                            echo "Stok habis";
                                        } else{
                                            echo "Tersedia";
                                        }
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
<!-- container -->