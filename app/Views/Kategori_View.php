<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kategori</title>
</head>
<body>
    <h1>Daftar Kategori</h1>
    <a href="<?= base_url('kategori/create'); ?>">Tambah Kategori</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Kode DDC</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kategori as $category) : ?>
                <tr>
                    <td><?= $category['id']; ?></td>
                    <td><?= $category['kategori']; ?></td>
                    <td><?= $category['kode_ddc']; ?></td>
                    <td>
                        <a href="<?= base_url('kategori/edit/' . $category['id']); ?>">Edit</a>
                        <a href="<?= base_url('kategori/delete/' . $category['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>