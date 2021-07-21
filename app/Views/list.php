<?php foreach ($allValue as $value) : ?>
    <h1><?= $value['judul_artikel']; ?></h1>
    <?php
    $isi_artikel = $value['isi_artikel'];
    $isi_artikel = character_limiter($isi_artikel, 100);
    ?>
    <p><?= $isi_artikel; ?></p>
    <a href="#">baca selanjutnya</a>
<?php endforeach; ?>