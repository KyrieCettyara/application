<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="panel-body">
                    <hr>
                    <form class="" enctype="multipart/form-data" action="<?= base_url('ArtikelController/addArtikel'); ?>" method="post">
                        <div class="form-group">
                            <label for="name">Jenis Artikel</label>
                            <select class="form-control" name="id_jenis_artikel" id="id_jenis_artikel">
                                <?php foreach ($data as $value) : ?>

                                    <option value="<?= $value['id_jenis_artikel']; ?>">
                                        <?= $value['nama_jenis_artikel']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar">
                            <label class="custom-file-label" for="gambar">Choose file...</label>
                            <input type="file" class="custom-file-input" name="gambar" id="gambar">
                        </div>

                        <div class="form-group">
                            <label for="judul_artikel">Judul Artikel</label>
                            <input class="form-control" type="text" class="form-control" name="judul_artikel" id="judul_artikel">
                        </div>
                        <div class="form-group">
                            <label for="isi_artikel">Isi</label>
                            <textarea class="form-control" type="text" class="form-control" name="isi_artikel" id="isi_artikel"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


</body>

</html>