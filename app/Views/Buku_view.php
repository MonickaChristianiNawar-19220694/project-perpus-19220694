<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="<?= base_url('buku/create'); ?>">Tambah Buku</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori ID</th>
                <th>Penerbit ID</th>
                <th>Judul</th>
                <th>Edisi</th>
                <th>Cetakan</th>
                <th>Sinopsis</th>
                <th>Halaman</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Cover File</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buku as $book) : ?>
                <tr>
                    <td><?= $book['id']; ?></td>
                    <td><?= $book['tb_kategori_id']; ?></td>
                    <td><?= $book['tb_penerbit_id']; ?></td>
                    <td><?= $book['judul']; ?></td>
                    <td><?= $book['edisi']; ?></td>
                    <td><?= $book['cetakan']; ?></td>
                    <td><?= $book['sinopsis']; ?></td>
                    <td><?= $book['halaman']; ?></td>
                    <td><?= $book['penulis']; ?></td>
                    <td><?= $book['tahun']; ?></td>
                    <td><?= $book['cover_file']; ?></td>
                    <td>
                        <a href="<?= base_url('buku/edit/' . $book['id']); ?>">Edit</a>
                        <a href="<?= base_url('buku/delete/' . $book['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>