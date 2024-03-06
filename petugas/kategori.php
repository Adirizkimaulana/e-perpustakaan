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
					echo "<div class='alert alert-success'>Data berhasil update !</div>";
				}
			}
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="hapus"){
					echo "<div class='alert alert-success'>Data berhasil dihapus!</div>";
				}
			}
			?>
			<a href="tambah_kategori.php" class="btn btn-info btn-sm mt-2">Tambah Data</a>
			<table class="table table-striped table-hover text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>NAMA KATEGORI</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					 <?php 
					 include '../koneksi.php';
					 $no = 1;
					 $data = mysqli_query($koneksi,"select * from kategoribuku");
					 while($d = mysqli_fetch_array($data)){
					 ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['NamaKategori']; ?></td>
							<td>
								<a href="edit_kategori.php?KategoriID=<?php echo $d['KategoriID']; ?>" class="btn btn-warning btn-sm mb-3">Edit</a>
								<a href="proses_hapus_kategori.php?KategoriID=<?php echo $d['KategoriID']; ?>" class="btn btn-danger btn-sm mb-3">Hapus</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>