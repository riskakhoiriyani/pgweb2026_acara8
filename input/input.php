<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "latihan";
$port       = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$kecamatan = $_POST['kecamatan'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$luas = $_POST['luas'];
$jumlah_penduduk = $_POST['jumlah_penduduk'];

$sql = "INSERT INTO penduduk 
        (kecamatan, longitude, latitude, luas, jumlah_penduduk)
        VALUES 
        ('$kecamatan', '$longitude', '$latitude', '$luas', '$jumlah_penduduk')";

if ($conn->query($sql) === TRUE) {

    header("Location: ../index.php");
    exit();

} else {

    echo "Data gagal disimpan: " . $conn->error;

}

$conn->close();

?>