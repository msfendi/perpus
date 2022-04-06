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
                    <h1>Koleksi</h1>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Tabel Koleksi</h5>
                    <a href="<?= base_url('koleksi/tambah'); ?>" class="btn btn-success mb-3">Tambah Data</a>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th style="width:30%">Aksi</th>
                        </tr>
                        <?php foreach ($row->result() as $key => $data) { ?>
                            <tr>
                                <td><?= $data->id_buku; ?></td>
                                <td><?= $data->judul; ?></td>
                                <td>
                                    <a href="<?= base_url('koleksi/edit/') . $data->id_buku; ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('koleksi/delete/') . $data->id_buku;
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

<script>
    function confirm_delete() {
        $(document).on('click', '#delete', function() {
            var id = $(this).data('id_buku');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                            url: '<?= base_url('koleksi/delete/') ?>',
                            type: 'POST',
                            data: 'id=' + id,
                            dataType: 'json'
                        })
                        .done(function(response) {
                            swal('Deleted!', response.message, response.status);
                            fetch();
                        })
                        .fail(function() {
                            swal('Oops...', 'Something went wrong with ajax !', 'error');
                        });
                }

            })

        });
    }
</script>