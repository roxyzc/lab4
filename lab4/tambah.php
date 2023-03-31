<h1>Tambah Barang</h1>
<div class="main">
    <form method="post" enctype="multipart/form-data">
        <div class="input">
            <label>Nama Barang</label>
            <input type="text" maxlength="30" name="nama" />
        </div>
        <div class="input">
            <label>Kategori</label>
            <select name="kategori">
                <option value="Komputer">Komputer</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Hand Phone">Hand Phone</option>
            </select>
        </div>
        <div class="input">
            <label>Harga Jual</label>
            <input type="text" maxlength="10" name="harga_jual" />
        </div>
        <div class="input">
            <label>Harga Beli</label>
            <input type="text" maxlength="10" name="harga_beli" />
        </div>
        <div class="input">
            <label>Stok</label>
            <input type="text" maxlength="10" name="stok" />
        </div>
        <div class="input">
            <label>File Gambar</label>
            <div class="label">
                <input type="file" name="file_gambar" />
            </div>
        </div>
        <div class="submit">
            <input type="submit" name="tambah" value="Simpan" />
        </div>
    </form>
</div>