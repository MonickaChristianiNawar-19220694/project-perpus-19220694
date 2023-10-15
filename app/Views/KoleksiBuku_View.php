<!DOCTYPE html>
<html>
<head>
    <title>Daftar Koleksi Buku</title>
</head>
<body>
    <h1>Daftar Koleksi Buku</h1>
    <a href="<?= base_url('koleksibuku/create'); ?>">Tambah Koleksi Buku</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TB Buku ID</th>
                <th>Nomor Koleksi</th>
                <th>Status Koleksi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($koleksibuku as $collection) : ?>
                <tr>
                    <td><?= $collection['id']; ?></td>
                    <td><?= $collection['tb_buku_id']; ?></td>
                    <td><?= $collection['nomor_koleksi']; ?></td>
                    <td><?= $collection['status_koleksi']; ?></td>
                    <td>
                        <a href="<?= base_url('koleksibuku/edit/' . $collection['id']); ?>">Edit</a>
                        <a href="<?= base_url('koleksibuku/delete/' . $collection['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>