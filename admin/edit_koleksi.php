

<?php
include 'header.php';
include 'navbar.php';
?>

<?php
require_once "../koneksi.php";
if (isset($_GET['KategoriBukuID'])) {
    $KategoriBukuID = ($_GET["KategoriBukuID"]);
    $query = "SELECT * FROM kategoribuku_relasi WHERE KategoriBukuID='$KategoriBukuID'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
    $d = mysqli_fetch_assoc($result);
    if (!count($d)) {
        echo "<script>alert('Data Kategori tidak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
$no = 1;
$sql = "SELECT * FROM kategoribuku_relasi
INNER JOIN buku ON kategoribuku_relasi.BukuID = buku.BukuID
INNER JOIN kategoribuku ON kategoribuku_relasi.KategoriID = kategoribuku.KategoriID WHERE 
KategoriBukuID='$KategoriBukuID'
";
$query = mysqli_query($koneksi, $sql);
while ($d_koleksi = mysqli_fetch_array($query)) {
?>
<div class="container pt-4 px-4">
        <div class="row g-4">
            <div class="col">
                <div class="bg-primary rounded h-100 p-4">
                    <h6 class="mb-4">EDIT KATEGORI BUKU RELASI</h6>
                    <form method="POST" action="proses_update_koleksi.php">
                        <div class="row mb-3">
                            <label for="inputText3" class="col-sm-2 col-form-label">KATEGORI BUKU ID</label>
                            <div class="col-sm-10">
                                <input name="KategoriBukuID" type="text" class="form-control" value="<?php echo $d_koleksi['KategoriBukuID']; ?>" readonly>
                            </div>
                        </div>
                        <select class="form-control mt-2" name="BukuID">
    <?php
    include "../koneksi.php";
    $dataBuku = mysqli_query($koneksi, "SELECT * FROM buku");
    while ($d_buku = mysqli_fetch_array($dataBuku)) { 
        $selected = ($d_buku['BukuID'] == $d_koleksi['BukuID']) ? 'selected' : '';
    ?>
        <option value="<?php echo $d_buku['BukuID']; ?>" <?php echo $selected; ?>>
            <?php echo $d_buku['Judul']; ?>
        </option>
    <?php } ?>
</select>

<select class="form-control mt-2" name="KategoriID">
    <?php
    $dataKategori = mysqli_query($koneksi, "SELECT * FROM kategoribuku");
    while ($d_kategori = mysqli_fetch_array($dataKategori)) { 
        $selected = ($d_kategori['KategoriID'] == $d_koleksi['KategoriID']) ? 'selected' : '';
    ?>
        <option value="<?php echo $d_kategori['KategoriID']; ?>" <?php echo $selected; ?>>
            <?php echo $d_kategori['NamaKategori']; ?>
        </option>
    <?php } ?>
</select>

                        <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>