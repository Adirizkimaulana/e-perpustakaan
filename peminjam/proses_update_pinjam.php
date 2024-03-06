<?php 

include "../koneksi.php";

$PeminjamID = $_POST['PeminjamID'];
$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];
$TanggalPeminjaman = $_POST['TanggalPeminjaman'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$StatusPeminjaman = $_POST['StatusPeminjaman'];

mysqli_query($koneksi, "UPDATE peminjaman SET UserID='$UserID',
BukuID='$BukuID', TanggalPeminjaman='$TanggalPeminjaman', 
TanggalPengembalian='$TanggalPengembalian', StatusPeminjaman='$StatusPeminjaman'
WHERE PeminjamID='$PeminjamID'");


header("Location:pinjam.php");

?>