<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<div class="container">
    <div class="card">
        <h5 class="card-header">
            Tambah Materi
        </h5>
        <ul class="list-group list-group-flush">
            <form action="<?= BASEURL ?>materiku/tambahMateriku" enctype="multipart/form-data" method="post">
                <li class="list-group-item">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Judul Materi</label>
                            <input type="text" class="form-control" name="nama" placeholder="Judul Materi" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="1">Front End</option>
                                <option value="2">Back End</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto1">Foto</label>
                        <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto1" name="foto1" aria-describedby="foto1" required>
                                <label class="custom-file-label" for="foto1">Pilih foto</label>
                            </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </li>
            </form>
        </ul>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#deskripsi' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</div>