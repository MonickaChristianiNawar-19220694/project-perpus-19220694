<!DOCTYPE html>
<html>
<head>
    <title>Form Penerbit</title>
</head>
<body>
    <h1>Form Penerbit</h1>
    <?php if (isset($validation)): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form method="post">
        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" value="<?= isset($penerbit['penerbit']) ? $penerbit['penerbit'] : ''; ?>"><br>

        <label for="kota">Kota:</label>
        <input type="text" name="kota" value="<?= isset($penerbit['kota']) ? $penerbit['kota'] : ''; ?>"><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>