<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<script async charset="utf-8" src="//cdn.embedly.com/widgets/platform.js"></script>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-8 mb-3">
            <div class="card">
                <h5 class="card-header">
                    <?= $data['materiku']['nama'] ?>
                </h5>

                <div class="card-body">
                    <p class="text-muted small float-left">Diupload sejak <?= $data['materiku']['created_at'] ?> </p>
                    <p class="float-right text-muted small">Kategori : <?= $data['materiku']['kategori'] ?></p>
                    <div id="foto" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <img class="mw-100 mb-3" src="<?= BASEURL ?>app/models/materi/<?= $data['materiku']['foto1'] ?>" alt="">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#foto" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#foto" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <h5 class="mt-3">Deskripsi</h5>
                    <?= $data['materiku']['deskripsi'] ?>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card ">
                <h5 class="card-header">
                    Pemateri
                </h5>
                <div class="card-body text-center">
                    <img class="rounded-circle" src="<?= $data['materiku']['foto_user'] ?  BASEURL . 'app/models/foto/' . $data['materiku']['foto_user'] : BASEURL . 'assets/img/icon/noavatar.png' ?>" alt="Foto Profil" width="200px" style="max-height: 200px; object-fit: cover;">
                    <h5 class="mt-3"><?= $data['materiku']['nama_user'] ?></h5>
                    <?= $data['materiku']['email'] ?> <br>
                    <p class="card-text text-muted">
                        Member sejak <?= $data['materiku']['created_at_user'] ?> <br>
                        Terakhir aktif <?= $data['materiku']['updated_at_user'] ?>
                    </p>
                    <a href="<?= BASEURL ?>profil/user/<?= $data['materiku']['id_user'] ?>" class="btn btn-outline-primary">Lihat Profil</a>
                </div>
            </div>

        </div>
    </div>
        <script>
        document.querySelectorAll( 'oembed[url]' ).forEach( element => {
            // Create the <a href="..." class="embedly-card"></a> element that Embedly uses
            // to discover the media.
            const anchor = document.createElement( 'a' );

            anchor.setAttribute( 'href', element.getAttribute( 'url' ) );
            anchor.className = 'embedly-card';

            element.appendChild( anchor );
        } );
    </script>
</div>