<h2 id="judul_artikel" name="judul_artikel"><?= $value['judul_artikel']; ?></h1>

    <button> <a href=" <?= base_url('edit-artikel/' . $value['id_artikel']); ?>">Edit</a></button>


    <button> <a href="<?= base_url('delete-artikel/' . $value['id_artikel']); ?>">Delete</a></button>