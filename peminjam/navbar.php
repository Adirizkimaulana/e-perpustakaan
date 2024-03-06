<?php

if($_SESSION['Level']==""){
    header("location:../index.php?info_login");
}
?>
<div  class ="content mt-3">
				<div class ="card bg-primary bg-gradient">
					<div class="card-body">
						<a href="index.php" class="btn text-light">Hallo | <?php echo $_SESSION['Username'] ?></a>
						<a href="index.php" class="btn text-light">Beranda</a>
						<a href="pinjam.php" class="btn text-light">Pinjam Buku</a>
						<a href="koleksipribadi.php" class="btn text-light">koleksi</a>
						<a href="ulasan.php" class="btn text-light">Ulasan Buku</a>
						<a href="../logout.php" class="btn text-light">Logout </a>  
					</div>
				</div>
			</div>