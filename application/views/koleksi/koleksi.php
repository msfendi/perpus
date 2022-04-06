<div class="card text-center">
    <div class="card-header">
        <h3 class="card-title">Daftar Buku</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title">Daftar Buku</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="<?= base_url('koleksi/daftar_buku'); ?>" class="btn btn-primary">Daftar Buku</a>
        <div class="row mt-5">
            <div class="col">
                <div class="row mt-3">
                    <?php foreach ($row->result() as $key => $data) { ?>
                        <div class="col-sm-3">
                            <div class="card">
                                <img src="<?= base_url('upload/') . $data->cover ?>" class="card-img-top" height="200">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $data->judul; ?></h5>
                                    <p class="card-text"><?= $data->deskripsi; ?></p>
                                    <a href="koleksi/detail/<?= $data->id_buku; ?>" class="btn btn-primary">Lihat Buku</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-muted">
        2 days ago
    </div>
</div>