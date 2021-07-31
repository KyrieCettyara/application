<?= $this->extend('admin/side_menu'); ?>

<?= $this->section('content'); ?>



<div class="container">
    <div class="butn">
        <a href=" <?= base_url('add-artikel'); ?>" class="btn" id="btn">Tambah Artikel</a>

    </div>
</div>
<?php foreach ($data as $value) : ?>
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
                        <a href="<?= base_url('artikel/' . $value['id_artikel']); ?>" class="btn">Baca Artikel...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $this->endSection(); ?>