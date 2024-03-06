<?php 

include "../koneksi.php";

$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];

mysqli_query($koneksi, "UPDATE kategoribuku SET  NamaKategori='$NamaKategori' WHERE KategoriID='$KategoriID'");

header("Location:kategori.php?pesan=update")

?>