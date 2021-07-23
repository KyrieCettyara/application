<?php foreach ($allValue as $value) : ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img id="gambar" class="card-img-top" src="<?= "upload/" . $value['gambar']; ?>" alt="image" />

                    <div class=" card-body">
                        <h5 class="card-title"><?= $value['judul_artikel']; ?></h5>
                        <p class="card-text"><?= $value['isi_artikel'] ?></p>
                        <a href="<?= base_url('artikel/' . $value['id_artikel']); ?>" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $key['key']; ?>