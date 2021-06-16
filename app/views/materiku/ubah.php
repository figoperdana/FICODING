<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<div class="container">
    <div class="card">
        <h5 class="card-header">
            Ubah Materiku
        </h5>
        <ul class="list-group list-group-flush">
            <form action="<?= BASEURL ?>materiku/ubahMateriku/<?= $data['materiku']['id'] ?>" method="post">
                <li class="list-group-item">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nama">Judul Materi</label>
                            <input type="text" class="form-control" name="nama" placeholder="Judul Materi" value="<?= $data['materiku']['nama'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" class="form-control" required>
                                <option value="<?= $data['materiku']['id_kategori'] ?>"><?= $data['materiku']['kategori'] ?></option>
                                <option value="1">Front End</option>
                                <option value="2">Back End</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" value="<?= $data['materiku']['deskripsi'] ?>" ></textarea>
                    </div>
                </li>
                <li class="list-group-item">
                    <button type="submit" class="btn btn-success btn-block">Simpan</button>
                </li>
            </form>
            <li class="list-group-item">
                <div>
                    <label> Foto </label>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <?php
                        $foto1 = $data['materiku']['foto1'];
                        if (!empty($foto1)) { ?>
                            <img src="<?= BASEURL ?>app/models/materi/<?= $foto1; ?>" alt="" width="100%" height="250px">
                            <a href="<?= BASEURL ?>materiku/hapusFoto1/<?= $data['materiku']['id'] ?>/<?= $foto1 ?>" class="btn btn-danger btn-block mt-3 mb-3">Hapus</a>
                        <?php } else if (empty($foto1)) { ?>
                            <img src="<?= BASEURL ?>assets/img/icon/noimage.jpg" alt="" width="100%" height="250px">
                        <?php } ?>
                        <form class="mt-3" action="<?= BASEURL ?>materiku/ubahFoto1/<?= $data['materiku']['id'] ?>" enctype="multipart/form-data" method="post">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto1" name="foto1" aria-describedby="foto1" required>
                                    <label class="custom-file-label" for="foto1">Pilih foto</label>
                                </div>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" id="foto1">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
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