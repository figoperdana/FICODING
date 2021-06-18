<div class="container">
    <div class="card">
        <h5 class="card-header">Profil</h5>
        <div class="card-body">
            <div class="mb-3" style="width: 100%; height: 200px; background:url('<?= BASEURL ?>assets/img/picture/abstract-green-wallpapers-hd-desktop-and-mobile-backgrounds.jpg'); background-size: 100% 200px">
                <img src="<?= BASEURL ?>app/models/cover/<?= $data['pemateri']['cover'] ?>" alt="" width="100%" height="100%">
            </div>
            <div class="float-left mr-3 rounded-circle">
                <img class=" rounded-circle" src="<?= $data['pemateri']['foto'] ?  BASEURL . 'app/models/foto/' . $data['pemateri']['foto'] : BASEURL . 'assets/img/icon/noavatar.png' ?>" alt="Foto Profil" width="100px" style="max-height: 130px; object-fit: cover;">
            </div>
            <h5 class="card-title "><?= $data['pemateri']['nama'] ?></h5>
            Email : <?= $data['pemateri']['email'] ?> <br>
            Nomor : <?= $data['pemateri']['nomor_telepon'] ?> <br>
            <p class="card-text text-muted">
                Member sejak <?= $data['pemateri']['created_at'] ?> <br>
                Terakhir aktif <?= $data['pemateri']['updated_at'] ?>
            </p>
        </div>
    </div>
    <div class="card mt-5">
        <h5 class="card-header">
            Daftar Materi
        </h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form class="input-group" action="" method="post">
                    <input type="text" class="form-control" placeholder="Cari Materi" aria-label="Cari Materi" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
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