<?php

session_start();


include 'koneksi.php';


$Username = $_POST['Username'];
$Password = md5($_POST['Password']);


$login = mysqli_query($koneksi,"SELECT * FROM user WHERE Username='$Username'and Password='$Password'");


$cek = mysqli_num_rows($login);


if($cek > 0){
    $data =  mysqli_fetch_assoc($login);
    if($data['Level']=="1"){

        $_SESSION['Username'] = $Username;
        $_SESSION['Level'] = "1";
        header("location:admin/index.php");

    }else if($data['Level']=="2"){
        $_SESSION['Username'] = $Username;
        $_SESSION['Level'] = "2";
        header("location:petugas/index.php");   

    }else if($data['Level']=="3"){
        $_SESSION['UserID'] = $UserID;
        $_SESSION['Username'] = $Username;
        $_SESSION['Level'] = "3";
        header("location:peminjam/index.php");

    }else{
        // alihkan ke halaman login kembali
        header("location:index.php?pesan=gagal");
 }
}else{
    header("location:index.php?pesan=gagal");
}
?>