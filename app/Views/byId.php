<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="coll">
            <div class="detail">
                <?php $image = $value['gambar']; ?>

                <img id="gambars" src="<?php echo base_url("upload/$image"); ?> " />

                <?php if (session()->get('isLoggedIn')) : ?>
                    <?php if (session()->get('isExist')) : ?>
                        <a href="<?= base_url('delete-bookmark/' . session()->get('id_bookmark')); ?>" title="Hapus Bookmark">
                            <i class="fa fa-bookmark fa-lg" aria-hidden="true"><span class="text"></span> </i>
                        </a></br></br>
                    <?php else : ?>
                        <a href="<?= base_url('tambah-bookmark') ?> " title="Tambah Bookmark">
                            <i class="fa fa-bookmark-o fa-lg" aria-hidden="true"><span class="text"></span></i>
                        </a></br></br>
                    <?php endif ?>

                <?php endif ?>

                <h3 class="title"><?= $value['judul_artikel']; ?></h3>
                <p><?= $value['isi_artikel']; ?></p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>