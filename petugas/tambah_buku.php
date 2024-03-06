<?php
include 'header.php';
include 'navbar.php';
?>
<div class ="content mt-3">
		<div class ="card">
			<div class ="card-body">
			<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="simpan"){
					echo "<div class='alert alert-success'>Data berhasil disimpan !</div>";
				}
			}
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="update"){
					echo "<div class='alert alert-success'>Data berhasildi update !</div>";
				}
			}
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="hapus"){
					echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
				}
			}
			?>
            <h5>FORM TAMBAH BUKU</h5>
			<form action="proses_tambah_buku.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="Judul">
                <label for="floatingInput">Judul</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="Penulis">
                <label for="floatingInput">Penulis</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="Penerbit">
                <label for="floatingInput">Penerbit</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="TahunTerbit">
                <label for="floatingInput">TahunTerbit</label>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">TAMBAH</button>
            </div>
            </form>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>