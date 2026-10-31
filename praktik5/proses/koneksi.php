<?php
$koneksi = mysqli_connect("localhost", "root", "", "rumahsakitmaya5");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
