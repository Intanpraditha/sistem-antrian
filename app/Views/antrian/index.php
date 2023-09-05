<!-- app/Views/antrian/index.php -->
<?php echo view ('templates/admin_header'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Daftar Antrian</title>
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
            <th>No. Antrian</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Status</th>
            <th>ID Dokter</th>
            <th>ID Pasien</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($antrian as $a) : ?>
            <tr>
                <td><?= $a['id_antrian'] ?></td>
                <td><?= $a['no_antrian'] ?></td>
                <td><?= $a['tgl'] ?></td>
                <td><?= $a['waktu'] ?></td>
                <td><?= $a['status'] ?></td>
                <td><?= $a['id_dokter'] ?></td>
                <td><?= $a['id_pasien'] ?></td>
                <td>
                    <a href="<?= site_url('antrian/edit/' . $a['id_antrian']) ?>"  class="btn btn-warning"  >Edit</a>
                    <a href="<?= site_url('antrian/delete/' . $a['id_antrian']) ?>  " onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="btn btn-danger" >Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="<?= site_url('antrian/create') ?>"  class="btn btn-primary"  >Tambah Antrian Baru</a>

    </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
<?php echo view ('templates/admin_footer'); ?>
