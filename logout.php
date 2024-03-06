<?php 

session_start();
session_destroy();

header("Location:index.php?pesan=info_logout")

?>