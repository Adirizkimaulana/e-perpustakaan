<?php

include "../koneksi.php";

$UserID = $_GET['UserID'];

mysqli_query($koneksi, "DELETE FROM user WHERE UserID='$UserID'");

header("Location:pengguna.php?pesan=hapus")

?>