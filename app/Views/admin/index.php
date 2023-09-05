<!-- app/Views/admin/index.php -->
<?php echo view ('templates/admin_header'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Daftar Admin</title>
    <style>
    .card{
      margin: 0 20px 20px 20px;
    }
  </style>
</head>
<body>
<div class="card">
      <div class="card-header">
        <h1 class="card-title"><b>Data Antrian</b></h1>
      </div>
              <!-- /.card-header -->
      <div class="card-body">
        <div class="container"><br>
    <table class="table table-bordered ">
        <tr class="table-success">
            <th>ID</th>
            <th>Username</th>
            <th>Nama Admin</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($admin as $a) : ?>
            <tr>
                <td><?= $a['id_admin'] ?></td>
                <td><?= $a['username'] ?></td>
                <td><?= $a['nama_admin'] ?></td>
                <td>
                    <a href="<?= site_url('admin/edit/' . $a['id_admin']) ?>" class="btn btn-warning" >Edit</a>
                    <a href="<?= site_url('admin/delete/' . $a['id_admin']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="btn btn-danger" >Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= site_url('admin/create') ?>" class="btn btn-primary" >Tambah Admin Baru</a>
    </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>

<?php echo view ('templates/admin_footer'); ?>
