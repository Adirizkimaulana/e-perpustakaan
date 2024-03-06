<!DOCTYPE html>
<html>
<head>
	<title>Form Daftar Aplikasi</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="content pt-5 px-5">
				<div class="card pt-5 px-5">
					<div class="row">
						<div class="col-sm-12">
							<div class="card-body pt-5 px-5">
							<h3 class="text-center" >MASUK</h3>
							<form method="post" action="cek_login.php">
								<div class="form-group mt-2">
									<label>Username</label>	
									<input type="text" name="Username" class="form-control">
								</div>
								<div class="form-group mt-2">
									<label>Password</label>	
									<input type="password" name="Password" class="form-control">
								</div>
								<div class="form-group mt-3">
									<button type="submit" class="btn btn-primary">MASUK</button>
								</div>
								<div class="form-group mt-3">
									<label>Belum punya akun silahkan klik tombol berikut :</label>
									<a href="daftar.php" class="btn btn-warning btn-sm">Daftar Akun</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>