<!DOCTYPE html>
<html>
<head>
    <title>Form Pengguna</title>
</head>
<body>
    <h1>Form Pengguna</h1>
    <?php if (isset($validation)): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?= isset($pengguna['email']) ? $pengguna['email'] : ''; ?>"><br>

        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" value="<?= isset($pengguna['nama_lengkap']) ? $pengguna['nama_lengkap'] : ''; ?>"><br>

        <label for="katasandi">Kata Sandi:</label>
        <input type="password" name="katasandi"><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>