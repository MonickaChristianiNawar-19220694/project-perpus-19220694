<!DOCTYPE html>
<html>
<head>
    <title>Daftar Penerbit</title>
</head>
<body>
    <h1>Daftar Penerbit</h1>
    <a href="<?= base_url('penerbit/create'); ?>">Tambah Penerbit</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Penerbit</th>
                <th>Kota</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($penerbit as $publisher) : ?>
                <tr>
                    <td><?= $publisher['id']; ?></td>
                    <td><?= $publisher['penerbit']; ?></td>
                    <td><?= $publisher['kota']; ?></td>
                    <td>
                        <a href="<?= base_url('penerbit/edit/' . $publisher['id']); ?>">Edit</a>
                        <a href="<?= base_url('penerbit/delete/' . $publisher['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>