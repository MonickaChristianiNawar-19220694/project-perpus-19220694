<!DOCTYPE html>
<html>
<head>
    <title>Daftar Peminjaman</title>
</head>
<body>
    <h1>Daftar Peminjaman</h1>
    <a href="<?= base_url('peminjaman/create'); ?>">Tambah Peminjaman</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>ID Pengguna Peminjaman</th>
                <th>ID Pengguna Pengembalian</th>
                <th>ID Anggota</th>
                <th>ID Koleksi Buku</th>
                <th>Denda</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peminjaman as $loan) : ?>
                <tr>
                    <td><?= $loan['id']; ?></td>
                    <td><?= $loan['tgl_peminjaman']; ?></td>
                    <td><?= $loan['tgl_pengembalian']; ?></td>
                    <td><?= $loan['tb_pengguna_id_peminjaman']; ?></td>
                    <td><?= $loan['tb_pengguna_id_pengembalian']; ?></td>
                    <td><?= $loan['tb_anggota_id']; ?></td>
                    <td><?= $loan['tb_koleksibuku_id']; ?></td>
                    <td><?= $loan['denda']; ?></td>
                    <td>
                        <a href="<?= base_url('peminjaman/edit/' . $loan['id']); ?>">Edit</a>
                        <a href="<?= base_url('peminjaman/delete/' . $loan['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>