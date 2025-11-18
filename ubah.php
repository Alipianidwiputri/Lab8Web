<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit']))
{
    $nama        = $_POST['nama'];
    $kategori    = $_POST['kategori'];
    $harga_jual  = $_POST['harga_jual'];
    $harga_beli  = $_POST['harga_beli'];
    $stok        = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];

    $gambar = $data['gambar']; // pakai gambar lama jika tidak upload baru

    if ($file_gambar['error'] == 0)
    {
        $filename = str_replace(' ', '_', $file_gambar['name']);
        $destination = dirname(__FILE__) . '/gambar/' . $filename;

        if(move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $gambar = $filename;
        }
    }

    $sql = "UPDATE data_barang SET 
            nama = '{$nama}',
            kategori = '{$kategori}',
            harga_jual = '{$harga_jual}',
            harga_beli = '{$harga_beli}',
            stok = '{$stok}',
            gambar = '{$gambar}'
            WHERE id_barang = '{$id}'";

    mysqli_query($conn, $sql);
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Ubah Barang</title>

<style>
    .input {
        margin-bottom: 12px;
    }
    label {
        display: inline-block;
        width: 120px;
    }
    input[type="text"], select {
        width: 200px;
        padding: 4px;
    }
    .submit input {
        background: blue;
        color: white;
        padding: 6px 16px;
        border: none;
        cursor: pointer;
    }
</style>
</head>

<body>

<div class="container">
    <h1>Ubah Barang</h1>
    <div class="main">
        <form method="post" enctype="multipart/form-data">

            <div class="input">
                <label>Nama Barang</label>
                <input type="text" name="nama" value="<?= $data['nama']; ?>" />
            </div>

            <div class="input">
                <label>Kategori</label>
                <select name="kategori">
                    <option <?= ($data['kategori']=='Komputer')?'selected':''; ?>>Komputer</option>
                    <option <?= ($data['kategori']=='Elektronik')?'selected':''; ?>>Elektronik</option>
                    <option <?= ($data['kategori']=='Hand Phone')?'selected':''; ?>>Hand Phone</option>
                </select>
            </div>

            <div class="input">
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" value="<?= $data['harga_jual']; ?>" />
            </div>

            <div class="input">
                <label>Harga Beli</label>
                <input type="text" name="harga_beli" value="<?= $data['harga_beli']; ?>" />
            </div>

            <div class="input">
                <label>Stok</label>
                <input type="text" name="stok" value="<?= $data['stok']; ?>" />
            </div>

            <div class="input">
                <label>File Gambar</label>
                <input type="file" name="file_gambar" />
            </div>

            <div class="submit">
                <input type="submit" name="submit" value="Simpan" />
            </div>

        </form>
    </div>
</div>

</body>
</html>
