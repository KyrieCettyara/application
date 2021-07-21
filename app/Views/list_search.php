<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SEARCHING DATA DENGAN CODEIGNITER 4</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="width: 70%; margin: 0 auto; padding-top: 30px;">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>SEARCHING DATA DENGAN CODEIGNITER 4 </h2>
            </div>
        </div>
    </div>
    <hr>
    <form method="GET" action="<?php echo base_url('Home/search'); ?>" class="form-group">
        <div class="row">
            <div class="col-lg-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                </tr>
                <?php $no = 1 + (10 * ($page - 1));
                foreach ($artikel as $row) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['judul_artikel']; ?></td>

                    </tr>
                <?php $no++;
                endforeach; ?>
            </table>
            <?= $pager->Links() ?>
        </div>
    </div>
</body>

</html>