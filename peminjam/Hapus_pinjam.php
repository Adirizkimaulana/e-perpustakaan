<?php 

include "../koneksi.php";

$PeminjamID = $_GET['PeminjamID'];

mysqli_query($koneksi, "DELETE FROM peminjaman WHERE PeminjamID='$PeminjamID'");

header("Location:pinjam.php?pesan=hapus")

?>