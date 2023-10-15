<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota</title>
</head>
<body>
    <h1>Daftar Anggota</h1>
    <a href="<?= base_url('anggota/create'); ?>">Tambah Anggota</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($anggota as $member) : ?>
                <tr>
                    <td><?= $member['id']; ?></td>
                    <td><?= $member['nama_lengkap']; ?></td>
                    <td><?= $member['alamat']; ?></td>
                    <td><?= $member['kota']; ?></td>
                    <td><?= $member['notelp']; ?></td>
                    <td><?= $member['email']; ?></td>
                    <td>
                        <a href="<?= base_url('anggota/edit/' . $member['id']); ?>">Edit</a>
                        <a href="<?= base_url('anggota/delete/' . $member['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>