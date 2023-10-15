<!DOCTYPE html>
<html>
<head>
    <title>Form Anggota</title>
</head>
<body>
    <h1>Form Anggota</h1>
    <?php if (isset($validation)): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form method="post">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" value="<?= isset($anggota['nama_lengkap']) ? $anggota['nama_lengkap'] : ''; ?>"><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?= isset($anggota['alamat']) ? $anggota['alamat'] : ''; ?>"><br>

        <label for="kota">Kota:</label>
        <input type="text" name="kota" value="<?= isset($anggota['kota']) ? $anggota['kota'] : ''; ?>"><br>

        <label for="notelp">No. Telepon:</label>
        <input type="text" name="notelp" value="<?= isset($anggota['notelp']) ? $anggota['notelp'] : ''; ?>"><br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?= isset($anggota['email']) ? $anggota['email'] : ''; ?>"><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>