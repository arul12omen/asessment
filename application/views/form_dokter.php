<html>

<head>
    <title>List Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

    <body>
    <br>
    <center>
        <h1 class="glow">Dokter</h1>
    </center>
    <hr><br>
        <div class="container">
        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
        </div>
        <form method="post" encrypt="multipart/form-data" action="<?php echo $action ?>">
            <div class="mb-3">
                <label for="" class="form-label">Nama</label>
                <input type="varchar" class="form-control" placeholder="masukan nama" name="nama" value="<?php echo $nama ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Spesialis</label>
                <input type="varchar" class="form-control" placeholder="masukan spesialis" name="spesialis" value="<?php echo $spesialis ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">No_Hp</label>
                <input type="varchar" class="form-control" placeholder="masukan no_hp" name="no_hp" value="<?php echo $no_hp ?>">
            </div>
            
            <div class="mb-3">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" class="btn btn-primary" value="simpan">
            </div>
        </form>
        </div>
    </body>
</html>