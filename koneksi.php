<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "sekolahku";

$koneksi = mysqli_connect($server, $username, $password, $database);

if ($koneksi) {
    echo "Koneksi berhasil";
}   else {
    echo "Koneksi gagal";
}
?>