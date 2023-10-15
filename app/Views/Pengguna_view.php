<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengguna</title>
</head>
<body>
    <h1>Daftar Pengguna</h1>
    <a href="<?= base_url('pengguna/create'); ?>">Tambah Pengguna</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Nama Lengkap</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengguna as $user) : ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['email']; ?></td>
                    <td><?= $user['nama_lengkap']; ?></td>
                    <td>
                        <a href="<?= base_url('pengguna/edit/' . $user['id']); ?>">Edit</a>
                        <a href="<?= base_url('pengguna/delete/' . $user['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>