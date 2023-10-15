<!DOCTYPE html>
<html>
<head>
    <title>Form Peminjaman</title>
</head>
<body>
    <h1>Form Peminjaman</h1>
    <?php if (isset($validation)): ?>
        <?= \Config\Services::validation()->listErrors(); ?>
    <?php endif; ?>
    <form method="post">
        <label for="tgl_peminjaman">Tanggal Peminjaman:</label>
        <input type="text" name="tgl_peminjaman" value="<?= isset($peminjaman['tgl_peminjaman']) ? $peminjaman['tgl_peminjaman'] : ''; ?>"><br>

        <label for="tgl_pengembalian">Tanggal Pengembalian:</label>
        <input type="text" name="tgl_pengembalian" value="<?= isset($peminjaman['tgl_pengembalian']) ? $peminjaman['tgl_pengembalian'] : ''; ?>"><br>

        <label for="tb_pengguna_id_peminjaman">ID Pengguna Peminjaman:</label>
        <input type="text" name="tb_pengguna_id_peminjaman" value="<?= isset($peminjaman['tb_pengguna_id_peminjaman']) ? $peminjaman['tb_pengguna_id_peminjaman'] : ''; ?>"><br>

        <label for="tb_pengguna_id_pengembalian">ID Pengguna Pengembalian:</label>
        <input type="text" name="tb_pengguna_id_pengembalian" value="<?= isset($peminjaman['tb_pengguna_id_pengembalian']) ? $peminjaman['tb_pengguna_id_pengembalian'] : ''; ?>"><br>

        <label for="tb_anggota_id">ID Anggota:</label>
        <input type="text" name="tb_anggota_id" value="<?= isset($peminjaman['tb_anggota_id']) ? $peminjaman['tb_anggota_id'] : ''; ?>"><br>

        <label for="tb_koleksibuku_id">ID Koleksi Buku:</label>
        <input type="text" name="tb_koleksibuku_id" value="<?= isset($peminjaman['tb_koleksibuku_id']) ? $peminjaman['tb_koleksibuku_id'] : ''; ?>"><br>

        <label for="denda">Denda:</label>
        <input type="text" name="denda" value="<?= isset($peminjaman['denda']) ? $peminjaman['denda'] : ''; ?>"><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>