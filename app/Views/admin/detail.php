<?= $this->extend('admin/side_menu'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="buttn">
        <a href=" <?= base_url('edit-artikel/' . $value['id_artikel']); ?>" class="btn btn-primary" id="btn">Edit</a>
        <a href="<?= base_url('delete-artikel/' . $value['id_artikel']); ?>" class="btn btn-primary" id="btn">Delete</a>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="detail">
                <?php $image = $value['gambar']; ?>
                <img id="gambar" src="<?php echo base_url("upload/$image"); ?> " />
                <h3 class="title"><?= $value['judul_artikel']; ?></h3>
                <p><?= $value['isi_artikel']; ?></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>