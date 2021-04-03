<!DOCTYPE html>
<html lang="en">
  <head>

  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Masuk &mdash; SPP Mahardhika</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome-free/css/all.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets2/css/style.css">
  <link rel="stylesheet" href="assets2/css/components.css">

</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
					  <strong>Perhatian!</strong> Mohon Cek Kembali Username dan Password Anda.
					  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
		}
		if($_GET['pesan']=="belummasuk"){
			echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
					  <strong>Perhatian!</strong> Username dan Password Anda Belum Terdaftar                                        					                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					    <span aria-hidden='true'>&times;</span>
					  </button>
					</div>";
		}
	}
	?>

<body class="bg-secondary text-white">
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets2/img/avatar/logologin.jpg" alt="logo" class="shadow-light rounded-circle">
            </div>

              <div class="bg-secondary">
               <form action="cek_login.php" method="post">
      		 			<div class="form-group">
      		 				<label>USERNAME</label>
      		 				<div class="input-group">
      		 					<div class="input-group-prepend">
      		 						<div class="input-group-text"><i class="fas fa-user btn-warning"></i></div>
      		 					</div>
      		 				<input type="text" name="username" class="form-control" placeholder="Masukan Username...." required="required">
      		 				</div>
      		 			</div>

               <div class="form-group">
         				<label>PASSWORD</label>
         				<div class="input-group">
         					<div class="input-group-prepend">
         						<div class="input-group-text"><i class="fas fa-unlock-alt btn-warning"></i></div>
        		 					</div>
        		 				<input type="password" name="password" class="form-control" placeholder="Masukan Password.." required="required">
        		 			</div>
        		 		</div>

                  <div class="form-group">
                    <button type="submit" class="btn btn- btn-warning btn-block" tabindex="4">
                      LOGIN
                    </button>
                  </div>
                </form>
                </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="bootstrap/jquery-3.3.1.min.js"></script>
  <script src="bootstrap/popper.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="bootstrap/jquery.nicescroll.min.js"></script>
  <script src="bootstrap/moment.min.js"></script>
  <script src="assets2/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="assets2/js/scripts.js"></script>
  <script src="assets2/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets2/js/page/index.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
