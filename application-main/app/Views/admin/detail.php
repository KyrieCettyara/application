<?= $this->extend('admin/side_menu'); ?>

<?= $this->section('content'); ?>
<a href=" <?= base_url('edit-artikel/' . $value['id_artikel']); ?>" class="btn btn-primary">Edit</a>

<a href="<?= base_url('delete-artikel/' . $value['id_artikel']); ?>" class="btn btn-primary">Delete</a>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <?php $image = $value['gambar']; ?>

                <img id="gambar" src="<?php echo base_url("upload/$image"); ?> " />


                <div class=" card-body">
                    <h5 class="card-title"><?= $value['judul_artikel']; ?></h5>
                    <p class="card-text"><?= $value['isi_artikel']; ?></p>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>