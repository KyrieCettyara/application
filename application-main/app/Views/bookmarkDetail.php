<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php foreach ($allValue as $value) : ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <?php $image = $value['gambar']; ?>

                    <img id="gambar" src="<?php echo base_url("upload/$image"); ?> " />


                    <div class=" card-body">
                        <a href="<?= base_url('delete-bookmark/' . $value['id_bookmark']); ?>" class=" btn btn-primary">Un-bookmark</a></br></br>
                        <h5 class="card-title"><?= $value['judul_artikel']; ?></h5>
                        <p class="card-text"><?= $value['isi_artikel']; ?></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $this->endSection(); ?>