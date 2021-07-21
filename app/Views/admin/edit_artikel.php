<div class="panel-body">
    <hr>
    <form class="" action="<?= base_url('ArtikelController/editArtikel/' . $modelId['id_artikel']); ?>" method="post">
        <div class="form-group">
            <label for="name">Jenis Artikel</label>
            <select name="id_jenis_artikel" id="id_jenis_artikel" value="<?= $modelId['id_jenis_artikel'] ?>">
                <?php foreach ($data as $value) : ?>

                    <option value="<?= $value['id_jenis_artikel']; ?>">
                        <?= $value['nama_jenis_artikel']; ?>
                    </option>
                <?php endforeach; ?>
            </select>

        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" value="<?= $modelId['gambar'] ?>">
        </div>
        <div class="form-group">
            <label for="judul_artikel">Id Artikel</label>
            <input type="text" class="form-control" name="judul_artikel" id="id_artikel" value="<?= $modelId['id_artikel'] ?>" readonly>
        </div>
        <div class="form-group">
            <div class="form-group">
                <label for="judul_artikel">Judul Artikel</label>
                <input type="text" class="form-control" name="judul_artikel" id="judul_artikel " value="<?= $modelId['judul_artikel'] ?>">
            </div>
            <div class="form-group">
                <label for="isi_artikel">Isi</label>
                <input type="text" class="form-control" name="isi_artikel" id="isi_artikel" value="<?= $modelId['isi_artikel'] ?>">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>