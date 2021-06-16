<div class="container">
    <div class="card">
        <h5 class="card-header">
            Materi Saya
            <a href="<?= BASEURL ?>materiku/tambah" class="btn btn-primary btn-sm float-right">Tambah</a>
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form id="cari" action="<?= BASEURL ?>materiku/cari" class="input-group p-2" method="POST">
                    <input type="text" name="cari" class="form-control" placeholder="Cari Materi" aria-label="cari" aria-describedby="cari" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="cari">Cari</button>
                    </div>
                </form>
            </li>
            <?php if (!$data['materiku']) { ?>
                <li class="list-group-item">
                    Belum ada materi
                </li>
            <?php } else {
            foreach ($data['materiku'] as $materiku) : ?>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-2">
                            <img class="float-left mr-3 mw-100" src="<?= BASEURL ?>app/models/materi/<?= $materiku['foto1']; ?>" alt="">
                        </div>
                        <div class="col-md-8">
                            <a class="card-link float-left" href="<?= BASEURL ?>materiku/detail/<?= $materiku['id']; ?>">
                                <div class="">
                                    <h5 class="text-body"><?= $materiku['nama']; ?></h5>
                                    <p class="text-muted small">Ditambahkan sejak <?= $materiku['created_at']; ?> </p>
                                    <p class="text-body"><?= $materiku['deskripsi']; ?></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <a href="<?= BASEURL ?>materiku/hapus/<?= $materiku['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ?');">hapus</a>
                            <a href="<?= BASEURL ?>materiku/ubah/<?= $materiku['id']; ?>" class="badge badge-success float-right ml-1">Ubah</a>
                        </div>
                    </div>
                </li>
            <?php endforeach;
        } ?>
        </ul>
    </div>
</div>