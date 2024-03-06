<?php 

include "../koneksi.php";

$BukuID = $_GET['BukuID'];
mysqli_query($koneksi, "DELETE FROM buku WHERE BukuID='$BukuID'");

header("Location:buku.php?pesan=hapus")

?>