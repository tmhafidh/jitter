<?php
include 'koneksi.php';

$query = "SELECT * FROM delay";
$sql = mysqli_query($conn, $query);
$no = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Belajar Crud</title>
</head>

<body>
    <h1>
        Data Mahasisawa
    </h1>

    <a href="form.php">
        <button> Tambah Delay</button>
    </a>
    <br>
    <br>
    <table border="1">
        <thead>
            <th>No</th>
            <th>Total</th>
            <th>Jumlah Data</th>
            <th>Rata - Rata</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?>.</td>
                    <td><?php echo $data['total_delay']; ?></td>
                    <td><?php echo $data['jml_data']; ?></td>
                    <td><?php echo $data['rata_rata']; ?></td>
                    <td>
                        <a href="formmhs.php?ubah=<?php echo $data['id_mhs']; ?>">
                            <button>Edit</button>
                        </a>
                        <a href="proses.php?hapus=<?php echo $data['id_mhs']; ?>">
                            <button>Hapus</button>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>