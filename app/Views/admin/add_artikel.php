<?= $this->extend('admin/side_menu'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="panel-body">
                <h1>Tambah Artikel</h1>
                <hr>
                <form class="" enctype="multipart/form-data" action="<?= base_url('ArtikelController/addArtikel'); ?>" method="post">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Jenis Artikel</label>
                        <div class="col-sm-10">
                            <select name="id_jenis_artikel" id="id_jenis_artikel" class="form-control">

                                <?php foreach ($data as $value) : ?>

                                    <option value="<?= $value['id_jenis_artikel']; ?>">
                                        <?= $value['nama_jenis_artikel']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" style="height: fit-content;" name="gambar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul_artikel" class="col-sm-2 col-form-label">Judul Artikel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul_artikel" id="judul_artikel">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi_artikel" class="col-sm-2 col-form-label">Isi</label>
                        <div class="col-sm-10">
                            <textarea type="text" class="form-control" name="isi_artikel" id="isi_artikel"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>