<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
</head>
<body>
    <h1>Form Buku</h1>
    <?php if (isset($validation)): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data">
        <label for="tb_kategori_id">Kategori ID:</label>
        <input type="text" name="tb_kategori_id" value="<?= isset($buku['tb_kategori_id']) ? $buku['tb_kategori_id'] : ''; ?>"><br>

        <label for="tb_penerbit_id">Penerbit ID:</label>
        <input type="text" name="tb_penerbit_id" value="<?= isset($buku['tb_penerbit_id']) ? $buku['tb_penerbit_id'] : ''; ?>"><br>

        <label for="judul">Judul:</label>
        <input type="text" name="judul" value="<?= isset($buku['judul']) ? $buku['judul'] : ''; ?>"><br>

        <label for="edisi">Edisi:</label>
        <input type="text" name="edisi" value="<?= isset($buku['edisi']) ? $buku['edisi'] : ''; ?>"><br>

        <label for="cetakan">Cetakan:</label>
        <input type="text" name="cetakan" value="<?= isset($buku['cetakan']) ? $buku['cetakan'] : ''; ?>"><br>

        <label for="sinopsis">Sinopsis:</label>
        <textarea name="sinopsis"><?= isset($buku['sinopsis']) ? $buku['sinopsis'] : ''; ?></textarea><br>

        <label for="halaman">Halaman:</label>
        <input type="text" name="halaman" value="<?= isset($buku['halaman']) ? $buku['halaman'] : ''; ?>"><br>

        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" value="<?= isset($buku['penulis']) ? $buku['penulis'] : ''; ?>"><br>

        <label for="tahun">Tahun:</label>
        <input type="text" name="tahun" value="<?= isset($buku['tahun']) ? $buku['tahun'] : ''; ?>"><br>

        <label for="cover_file">Cover File:</label>
        <input type="file" name="cover_file"><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>