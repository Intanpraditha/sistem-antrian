<!-- app/Views/admin/edit.php -->
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
        <h1 class="card-title"><b>Edit Data Admin</b></h1>
      </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="container">
                  <a href="<?= site_url('admin') ?>" class="btn btn-secondary">Kembali ke Daftar</a> <br><br>
                    <form method="post" action="<?= site_url('admin/update/' . $admin['id_admin']) ?>">
                        <label class="form-label" >Username</label>
                        <input class="form-control" type="text" name="username" value="<?= $admin['username'] ?>"><br>
                        <label class="form-label" >Nama Admin</label>
                        <input class="form-control" type="text" name="nama_admin" value="<?= $admin['nama_admin'] ?>"><br>
                        <label class="form-label" >Password</label>
                        <input class="form-control" type="password" name="password" value="<?= $admin['password'] ?>"><br>
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </form>
                    </div></div></div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>
        </html>
        
        <?php echo view ('templates/admin_footer'); ?>
        
