<!-- app/Views/pasien/detail.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detail Pasien</title>
</head>
<body>
    <h1>Detail Pasien</h1>
    <p><strong>ID Pasien:</strong> <?= $pasien['id_pasien'] ?></p>
    <p><strong>Nama Pasien:</strong> <?= $pasien['nama_pasien'] ?></p>
    <p><strong>No. BPJS:</strong> <?= $pasien['no_bpjs'] ?></p>
    <p><strong>NIK:</strong> <?= $pasien['nik'] ?></p>
    <p><strong>Jenis Kelamin:</strong> <?= $pasien['jk'] ?></p>
    <p><strong>Usia:</strong> <?= $pasien['usia'] ?></p>
    <p><strong>No. Telepon:</strong> <?= $pasien['no_telp'] ?></p>
    <a href="<?= site_url('pasien') ?>">Kembali ke Daftar</a>
</body>
</html>
