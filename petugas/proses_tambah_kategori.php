<?php 

include "../koneksi.php";

$NamaKategori = $_POST['NamaKategori'];

mysqli_query($koneksi, "INSERT INTO kategoribuku VALUES('','$NamaKategori')");

header("Location:kategori.php?pesan=simpan");

?>