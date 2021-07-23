<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php if ($allValue != null) : ?>
    <?php foreach ($allValue as $value) : ?>
        <?php
        $isi_artikel = $value['isi_artikel'];
        $isi_artikel = character_limiter($isi_artikel, 500);
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img id="gambar" class="card-img-top" src="<?= "upload/" . $value['gambar']; ?>" alt="image" />

                        <div class=" card-body">
                            <h5 class="card-title"><?= $value['judul_artikel']; ?></h5>
                            <p class="card-text"><?= $isi_artikel; ?></p>
                            <a href="<?= base_url('bookmark/' . $value['id_bookmark']); ?>" class="btn btn-primary">Baca Artikel...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class=" card-body" style="height: 300px;">
                        <h5>Anda tidak memiliki bookmark.</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endif ?>
<?= $this->endSection(); ?>