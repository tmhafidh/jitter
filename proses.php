<?php

//Koneksi Databse
include 'koneksi.php';


if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "add") {
        // var_dump($_POST);
        // die();
        $total_delay = $_POST['total_delay'];
        $jml_data = $_POST['jml_data'];

        function hitungRataRata($total_delay, $jml_data)
        {
            // Menghitung rata-rata
            $average = $total_delay / $jml_data;

            // Mengembalikan nilai rata-rata
            return $average;
        }

        // $ratarata = hitungRataRata($total_delay, $jml_data);

        $rata_rata =  hitungRataRata($total_delay, $jml_data);

        // var_dump($rata_rata);
        // die();

        // $rata_rata = $_POST['ratarata'];


        // echo $ratarata;
        // die();


        // var_dump($rata_rata);
        // die();

        $query = "INSERT INTO `delay`(`id_delay`, `total_delay`, `jml_data`, `rata_rata`) VALUES (null,'$total_delay','$jml_data','$rata_rata')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            // echo "Data berhasil ditambahkan <a href='index.php'>[Home]</a>";
            // alert("Data berhasil ditambahkan");
            // header("location:index.php");
            echo "<script>alert('Data Berhasil Disimpan');window.location='index.php?app=abstrak';</script>";
        } else {
            echo "Data gagal ditambahkan ";
            // echo $query;
        }

        // echo $nama . " | " . $nim . " | " . $jk . " | " . $no_hp . " | " . $dsn_wali . " | " . $unit . " | ";

        // echo "<br> Tambah Data <a href='index.php'>[Home]</a>";
    } else if ($_POST['aksi'] == "edit") {
        echo "Data berhasil diubah";
    }
}

if (isset($_GET['hapus'])) {
    echo "Data berhasil dihapus";
}
