<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Nama Saya <?= $this->session->userdata('nama_user'); ?></h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Email : <?= $this->session->userdata('email'); ?></h5>
                <h5 class="card-title">Umur : <?= $this->session->userdata('umur'); ?></h5>
                <h5 class="card-title">Alamat : <?= $this->session->userdata('alamat'); ?></h5>
                <div>
                    <ul class="list-group">
                        <?php foreach ($alamat as $rumah) { ?>
                            <li class="list-group-item"><?= $rumah; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>