<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Data Delay</h1>
    <form method="POST" action="proses.php">
        <label for="total_delay">Total Delay</label>
        <input type="text" name="total_delay" id="total_delay" placeholder="masukan total">
        <br>
        <br>
        <label for="jml_data">Jumlah Data</label>
        <input type="text" name="jml_data" id="jml_data" placeholder="masukan total">
        <br>
        <br>
        <!-- <label for="rata_rata">Rata - Rata</label>
        <input type="number" name="rata_rata" id="rata_rata" placeholder="masukan total"> -->
        <br>
        <br>
        <?php
        if (isset($_GET['ubah'])) {
        ?>
            <button type="submit" name="aksi" value="edit">Simpan Perubahan</button>
        <?php
        } else {
        ?>
            <button type="submit" name="aksi" value="add">Simpan</button>
        <?php
        }
        ?>
        <a href="index.php">
            <button>Batal</button>
        </a>
    </form>
</body>

</html>