<!-- app/Views/pasien/create.php -->
<?php echo view ('templates/admin_header'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    .card{
      margin: 0 20px 20px 20px;
    }
  </style>
  </head>
<body>
<div class="card">
      <div class="card-header">
        <h1 class="card-title"><b>Edit Data Pasien</b></h1>
      </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="container">
                  <a href="<?= site_url('pasien') ?>" class="btn btn-secondary">Kembali ke Daftar</a><br></br>
                    <form method="post" action="<?= site_url('pasien/update/' . $pasien['id_pasien']) ?>">
                        <label class="form-label" >Nama Pasien</label>
                        <input class="form-control" type="text" name="nama_pasien" value="<?= $pasien['nama_pasien'] ?>"><br>
                        <label class="form-label" >No. BPJS</label>
                        <input class="form-control" type="number" name="no_bpjs" value="<?= $pasien['no_bpjs'] ?>"><br>
                        <label class="form-label" >NIK</label>
                        <input class="form-control" type="number" name="nik" value="<?= $pasien['nik'] ?>"><br>
                        <label class="form-label" >Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" value="Laki-laki" <?= ($pasien['jk'] == 'Laki-laki') ? 'checked' : '' ?>> Laki-laki<br>
                                <input class="form-check-input" type="radio" name="jk" value="Perempuan" <?= ($pasien['jk'] == 'Perempuan') ? 'checked' : '' ?>> Perempuan<br><br>
                            </div>
                        <label class="form-label" >Usia</label>
                        <input class="form-control" type="number" name="usia" value="<?= $pasien['usia'] ?>"><br>
                        <label class="form-label" >No. Telepon</label>
                        <input class="form-control" type="text" name="no_telp" value="<?= $pasien['no_telp'] ?>"><br>
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </form>
                    </div></div></div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>
        </html>
        
        <?php echo view ('templates/admin_footer'); ?>
        
