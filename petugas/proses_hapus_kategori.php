<?php 

include "../koneksi.php";

$KategoriID = $_GET['KategoriID'];
mysqli_query($koneksi, "DELETE FROM kategoribuku WHERE KategoriID='$KategoriID'");

header("Location:kategori.php?pesan=hapus")

?>