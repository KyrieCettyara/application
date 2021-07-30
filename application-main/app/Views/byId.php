<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <?php $image = $value['gambar']; ?>

                <img id="gambar" src="<?php echo base_url("upload/$image"); ?> " />


                <div class=" card-body">
                    <?php if (session()->get('isLoggedIn')) : ?>
                        <a href="<?= base_url('tambah-bookmark') ?> " class=" btn btn-primary">Bookmark</a></br></br>
                    <?php endif ?>

                    <h5 class="card-title"><?= $value['judul_artikel']; ?></h5>
                    <p class="card-text"><?= $value['isi_artikel']; ?></p>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>