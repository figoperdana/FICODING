<div class="container">
    <div class="card mt-5">
        <h5 class="card-header">
            Daftar Materi
        </h5>
        <ul class="list-group list-group-flush">
            <?php if (!$data['modul_materi']) { ?>
                <li class="list-group-item">
                    Kosong
                </li>
            <?php } else {
            foreach ($data['modul_materi'] as $materiku) : ?>
                <li class="list-group-item ">
                    <a class="card-link" href="<?= BASEURL ?>materiku/detail/<?= $materiku['id']; ?>">
                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <img class="" src="<?= BASEURL ?>app/models/materi/<?= $materiku['foto1']; ?>" alt="" width="100%;">
                            </div>
                            <div class="col-md-7">
                                <h5 class="text-body"><?= $materiku['nama']; ?></h5>
                                <p class="text-body"><?= $materiku['deskripsi']; ?></p>
                            </div>
                            <div class="col-md-3 d-flex align-items-end flex-column">
                                <p class="text-muted small mt-auto">
                                    Ditambahkan sejak <?= $materiku['created_at']; ?> <br>
                                </p>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endforeach;
        } ?>
        </ul>
    </div>
</div>