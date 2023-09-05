<!-- app/Views/antrian/detail.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detail Antrian</title>
</head>
<body>
    <h1>Detail Antrian</h1>
    <p><strong>ID Antrian:</strong> <?= $antrian['id_antrian'] ?></p>
    <p><strong>No. Antrian:</strong> <?= $antrian['no_antrian'] ?></p>
    <p><strong>Tanggal:</strong> <?= $antrian['tgl'] ?></p>
    <p><strong>Waktu:</strong> <?= $antrian['waktu'] ?></p>
    <p><strong>Status:</strong> <?= $antrian['status'] ?></p>
    <p><strong>ID Dokter:</strong> <?= $antrian['id_dokter'] ?></p>
    <p><strong>ID Pasien:</strong> <?= $antrian['id_pasien'] ?></p>
    <a href="<?= site_url('antrian') ?>">Kembali ke Daftar</a>
</body>
</html>
