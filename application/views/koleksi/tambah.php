<div class="row justify-content-md-center mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Buku</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('koleksi/insert'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" class="form-control" id="judul" name="judul">
                        <input type="hidden" class="form-control" id="id_buku" name="id_buku">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis">
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang">
                    </div>
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                    </div>
                    <div class="form-group">
                        <label for="thn_terbit">Tahun Terbit</label>
                        <input type="date" class="form-control" id="thn_terbit" name="thn_terbit">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>