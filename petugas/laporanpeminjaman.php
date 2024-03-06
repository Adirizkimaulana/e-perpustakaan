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
					echo "<div class='alert alert-success'>Data berhasil dihapus !</div>";
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
			<a href="cetak_laporan.php" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp PRINT</a>
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Lengkap</th>
						<th>Judul</th>
						<th>Tanggal Peminjaman</th>
						<th>Tanggal Pengembalian</th>
						<th>Status Peminjaman</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                <?php
								require_once "../koneksi.php";
								$no = 1;
								$sql = "SELECT * FROM peminjaman
                                        INNER JOIN user ON peminjaman.UserID = user.UserID
                                        INNER JOIN buku ON peminjaman.BukuID = buku.BukuID
                                        ";
								$query = mysqli_query($koneksi, $sql);
								while ($row = mysqli_fetch_array($query)) {
								?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $row['NamaLengkap']; ?></td>
										<td><?php echo $row['Judul']; ?></td>
										<td><?php echo $row['TanggalPeminjaman']; ?></td>
										<td><?php echo $row['TanggalPengembalian']; ?></td>
										<td><?php echo $row['StatusPeminjaman']; ?></td>
										<td>
											<a href="edit_pinjam.php?PeminjamID=<?php echo $row["PeminjamID"]; ?>" class="btn btn-warning btn-sm mb-1">Edit</a>
											<a href="Hapus_pinjam.php?PeminjamID=<?php echo $row["PeminjamID"]; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
										</td>
									</tr>

								<?php
								}
								?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
    include "footer.php";
?>