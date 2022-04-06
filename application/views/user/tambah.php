<div class="row justify-content-md-center mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>Tambah User</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('user/insert'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama User</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                        <input type="hidden" class="form-control" id="id_user" name="id_user">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" id="umur" name="umur">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="image">Image Profile</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>