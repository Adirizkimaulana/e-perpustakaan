<?php
include 'header.php';
include 'navbar.php';

require_once "../koneksi.php";
if (isset($_GET['UserID'])) {
    $UserID = ($_GET["UserID"]);
    $query = "SELECT * FROM user WHERE UserID='$UserID'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
    $d = mysqli_fetch_assoc($result);
    if (!count($d)) {
        echo "<script>alert('Data user tidak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container pt-4 px-4">
        <div class="row g-4">
            <div class="col">
                <div class="bg-primary bg-gradient rounded h-100 p-4">
                    <h6 class="mb-4">Edit USER</h6>
                    <form method="POST" action="proses_update_pengguna.php">
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">USER ID</label>
                            <div class="col-sm-10">
                                <input name="UserID" type="text" class="form-control" value="<?php echo $d['UserID']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input name="Username" type="text" class="form-control" required="" value="<?php echo $d['Username']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="Password" type="text" class="form-control" required="" value="<?php echo $d['Password']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="Email" type="text" class="form-control" required="" value="<?php echo $d['Email']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">NamaLengkap</label>
                            <div class="col-sm-10">
                                <input name="NamaLengkap" type="text" class="form-control" required="" value="<?php echo $d['NamaLengkap']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input name="Alamat" type="text" class="form-control" required="" value="<?php echo $d['Alamat']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-10">
                                <input name="Level" type="text" class="form-control" required="" value="<?php echo $d['Level']; ?>">
                            </div>
                        </div>
                        <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>