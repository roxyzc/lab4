<?php
// error_reporting(E_ALL);
$id = strpos(@$_REQUEST["mod"], "/") ? str_split(@$_REQUEST["mod"], strpos(@$_REQUEST["mod"], "/") + 1)[1] : @$_REQUEST['mod'];
$sql = "SELECT * FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 0) {
    die('Error: Data tidak tersedia');
} else {
    $data = mysqli_fetch_array($result);
}

function is_select($var, $val)
{
    if ($var == $val) return 'selected="selected"';
    return false;
}

?>

<h1>Ubah Barang</h1>
<div class="main">
    <form method="post" action="../ubah" enctype="multipart/form-data">
        <div class="input">
            <label>Nama Barang</label>
            <input type="text" maxlength="30" name="nama" value="<?php echo $data['nama']; ?>" />
        </div>
        <div class="input">
            <label>Kategori</label>
            <select name="kategori">
                <option <?php echo is_select('Komputer', $data['kategori']); ?> value="Komputer">Komputer</option>
                <option <?php echo is_select('Komputer', $data['kategori']); ?> value="Elektronik">Elektronik</option>
                <option <?php echo is_select('Komputer', $data['kategori']); ?> value="Hand Phone">Hand Phone</option>
            </select>
        </div>
        <div class="input">
            <label>Harga Jual</label>
            <input type="text" maxlength="10" name="harga_jual" value="<?php echo $data['harga_jual']; ?>" />
        </div>
        <div class="input">
            <label>Harga Beli</label>
            <input type="text" maxlength="10" name="harga_beli" value="<?php echo $data['harga_beli']; ?>" />
        </div>
        <div class="input">
            <label>Stok</label>
            <input type="text" maxlength="10" name="stok" value="<?php echo $data['stok']; ?>" />
        </div>
        <div class="input">
            <label>File Gambar</label>
            <div class="label">
                <input type="file" name="file_gambar" />
            </div>
        </div>
        <div class="submit">
            <input type="hidden" name="id" value="<?php echo $data['id_barang']; ?>" />
            <input type="submit" name="ubah" value="Simpan" />
        </div>
    </form>
</div>