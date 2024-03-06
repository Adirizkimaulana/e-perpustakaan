<?php

include '../koneksi.php';

$UserID = $_POST['UserID'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$Level = $_POST['Level'];

mysqli_query($koneksi, "UPDATE user SET Username='$Username',Password='$Password',Email='$Email',
                        NamaLengkap='$NamaLengkap',Alamat='$Alamat', Level='$Level' WHERE UserID='$UserID '");

header("location:pengguna.php?pesan=update");

?>