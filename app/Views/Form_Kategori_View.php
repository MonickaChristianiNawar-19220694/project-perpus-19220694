<!DOCTYPE html>
<html>
<head>
    <title>Form Kategori</title>
</head>
<body>
    <h1>Form Kategori</h1>
    <?php if (isset($validation)): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form method="post">
        <label for="kategori">Kategori:</label>
        <input type="text" name="kategori" value="<?= isset($kategori['kategori']) ? $kategori['kategori'] : ''; ?>"><br>

        <label for="kode_ddc">Kode DDC:</label>
        <input type="text" name="kode_ddc" value="<?= isset($kategori['kode_ddc']) ? $kategori['kode_ddc'] : ''; ?>"><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>