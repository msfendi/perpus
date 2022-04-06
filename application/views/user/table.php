<div class="container">
    <div class="row">
        <div class="col-12">
            <?php //if ($this->session->flashdata('pesan') != '') { 
            ?>
            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php //echo $this->session->flashdata('pesan'); 
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> -->
            <?php //} 
            ?>
            <div class="card mt-3">
                <div class="card-header">
                    <h1>User</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tabel Koleksi</h5>
                    <a href="<?= base_url('user/tambah'); ?>" class="btn btn-success mb-3">Tambah User</a>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Umur</th>
                            <th style="width:30%">Aksi</th>
                        </tr>
                        <?php foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?= $data->id_user; ?></td>
                                <td><?= $data->nama_user; ?></td>
                                <td><?= $data->alamat; ?></td>
                                <td><?= $data->umur; ?></td>
                                <td>
                                    <a href="<?= base_url('user/edit/') . $data->id_user; ?>" class="btn btn-warning">Edit</a>
                                    <a href="<? //= base_url('user/delete/') . $data->id_user; 
                                                ?>" id="delete" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>