<!DOCTYPE html>
<html>
<head>
    <title>Form Koleksi Buku</title>
</head>
<body>
    <h1>Form Koleksi Buku</h1>
    <?php if (isset($validation)): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form method="post">
        <label for="tb_buku_id">TB Buku ID:</label>
        <input type="text" name="tb_buku_id" value="<?= isset($koleksibuku['tb_buku_id']) ? $koleksibuku['tb_buku_id'] : ''; ?>"><br>

        <label for="nomor_koleksi">Nomor Koleksi:</label>
        <input type="text" name="nomor_koleksi" value="<?= isset($koleksibuku['nomor_koleksi']) ? $koleksibuku['nomor_koleksi'] : ''; ?>"><br>

        <label for="status_koleksi">Status Koleksi:</label>
        <input type="text" name="status_koleksi" value="<?= isset($koleksibuku['status_koleksi']) ? $koleksibuku['status_koleksi'] : ''; ?>"><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>