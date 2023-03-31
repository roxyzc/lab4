<?php
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<div class="main">
    <h1>Data Barang</h1>
    <a class="tambah" href="tambah">Tambah barang</a>
    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Katagori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php if ($result) : ?>
            <?php while ($row = mysqli_fetch_array($result)) : ?>
                <tr>
                    <td><img src="img/<?= $row['gambar']; ?>" alt="<?= $row['gambar']; ?>"></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><?= number_format($row['harga_beli']); ?></td>
                    <td><?= number_format($row['harga_jual']); ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><a href="ubah/<?= $row['id_barang']; ?>">Ubah</a> <a href="hapus/<?= $row["id_barang"]; ?>">delete</a></td>
                </tr>
            <?php endwhile;
        else : ?>
            <tr>
                <td colspan="7">Belum ada data</td>
            </tr>
        <?php endif; ?>
    </table>
</div>