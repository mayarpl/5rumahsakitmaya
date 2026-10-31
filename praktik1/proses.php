<?php
include "koneksi.php";

$proses = isset($_GET['proses']) ? $_GET['proses'] : '';

if ($proses == 'insert') {
    $namapasien = $_POST['namapasien'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];

    // Mengubah sintaks ke standar INSERT INTO ... VALUES yang lebih aman dan universal
    mysqli_query($koneksi, "INSERT INTO pasien (namapasien, jeniskelamin, alamat, nohp) 
        VALUES ('$namapasien', '$jeniskelamin', '$alamat', '$nohp')");

} elseif ($proses == 'update') {
    $id = $_POST['idpasien'];
    $namapasien = $_POST['namapasien'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];

    mysqli_query($koneksi, "UPDATE pasien SET
        namapasien='$namapasien',
        jeniskelamin='$jeniskelamin',
        alamat='$alamat',
        nohp='$nohp'
        WHERE idpasien='$id'");

} elseif ($proses == 'hapus') {
    $id = $_POST['idpasien'];

    mysqli_query($koneksi, "DELETE FROM pasien WHERE idpasien='$id'");
}

header("location:index.php");
exit;
?>