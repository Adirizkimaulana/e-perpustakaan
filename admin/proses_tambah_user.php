<?php

include '../koneksi.php';

$Username = $_POST['Username'];
$Password = md5($_POST['Password']);
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$Level = $_POST['Level'];

mysqli_query($koneksi, "insert into user values('','$Username','$Password','$Email','$NamaLengkap','$Alamat','$Level')");


header("location:pengguna.php?pesan=simpan")
?>