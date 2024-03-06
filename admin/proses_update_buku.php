<?php 

include "../koneksi.php";

$BukuID = $_POST['BukuID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];

mysqli_query($koneksi, "UPDATE buku SET  Judul='$Judul', Penulis='$Penulis', Penerbit='$Penerbit', TahunTerbit='$TahunTerbit' 
WHERE BukuID='$BukuID'");

header("Location:buku.php?pesan=update")

?>