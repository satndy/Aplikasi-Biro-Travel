
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blitar Tourism</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<?php include("header.php") ?>

		<!-- end:header-top -->
<?php

	include 'class/user.php';
	$user = new user();

		
		if (isset($_SESSION['Login']))
		{
		    header("location:index.php");
		}

		if (isset($_POST['Login'])) {

			$login = $user->cek_login($_POST['username'],$_POST['password']);

			if ($login) {
			header("location:profil.php");
		}
			else
			{
					echo '<script language="javascript">document.location.href="login.php?status=Gagal Login";</script>	';		
				}
		}

	 ?>
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="col-sm-5 col-md-5">
								<div class="tabulation animate-box">

								  <!-- Nav tabs -->
								   <ul class="nav nav-tabs" role="tablist">
								      <li role="presentation">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Login</a>
								      </li>
								     
								   </ul>

								   <!-- Tab panes -->

									<div class="tab-content">
									 <form name="formLogin" method="post" action="login.php">
									 <div role="tabpanel" class="tab-pane" id="flights">
										<div class="row">
											<h1><?php  if(isset($_GET['status'])){ echo "&laquo; ".$_GET['status']." &raquo;"; }?></h1>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Username:</label>
													<input type="text" class="form-control" id="from-place" name="username" placeholder="Username"/>
												</div>
											</div>
											<div class="col-xxs-12 col-xs-6 mt">
												<div class="input-field">
													<label for="from">Password:</label>
													<input type="password" class="form-control" id="to-place" name="password" placeholder="Password"/>
												</div>
											</div>
											
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" name="Login" value="LOG IN">
											</div>
										</div>
									 </div>

									 </form>
									</div>

								</div>
							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									
									<h2>Silahkan Login</h2>
									<h3>Untuk liburan terbaik anda..</h3>
						
									<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		

		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Belum Punya Akun??</h3>
						<p>Silahkan daftar untuk mendapatkan liburan yang anda inginkan</p>
					</div>
				</div>
				<form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
					<div class="row animate-box">
						<div class="col-md-6">
							<h3 class="section-title">Tentang Kita</h3>
							<p>Perusahaan kami bergerak di bidang penyewaan jasa tour and travel. kami melayani untuk melakukan tour di wilayah Blitar Raya.</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Jalan Trowulan No.18 Bendogerit Kota Blitar</li>
								<li><i class="icon-phone2"></i>+6285790384993</li>
								<li><i class="icon-mail"></i><a href="#">blitartourism@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.blitartourism.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
							
								
								<div class="col-md-6">
									<div class="form-group">
											<label>Foto</label>
										<input type="file" class="form-control" name="foto" >
									</div>
								</div>
								<div class="col-md-6">
									<label>Nama</label>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nama" name="nama_user">
									</div>
								</div>
								<div class="col-md-6">
										<label>Email</label>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email" name="email_user">
									</div>
								</div>
								<div class="col-md-6">
										<label>Telpon</label>
									<div class="form-group">
									<input type="text" class="form-control" placeholder="No Hp" name="no_hp">
									</div>
								</div>
								<div class="col-md-6">
									<label>No Rekening</label>
									<div class="form-group">
							<input type="text" class="form-control" placeholder="No Rekening" name="no_rek">
									</div>
								</div>
								<div class="col-md-6">

										<label>Nama Rekening</label>
									<div class="form-group">
										<input type="text" class="form-control" name="nama_rek" placeholder="Atas nama rekening">
									</div>
								</div>
								<div class="col-md-6">
										<label>Username</label>
									<div class="form-group">
										<input type="text" class="form-control" name="username" placeholder="Username">
									</div>
								</div>
								<div class="col-md-6">
										<label>Password</label>
									<div class="form-group">
										<input type="text" class="form-control" name="password" placeholder="Password">
									</div>
								</div>
								<div class="col-md-6">
										<div class="input-field">
													<label for="date-start">Tgl Lahir</label>
													<input type="text" class="form-control" name="tgl_lahir" id="date-start" placeholder="mm/dd/yyyy"/>
												</div>
								</div>
								<div class="col-md-6">
									<label>Jenis Kelamin</label>
									<div class="form-group">
								
									<p>
										<input type="radio"  name="jekel" value="L">Laki-laki <br/>
          								<input type="radio"  name="jekel" value="P">Perempuan</p>
									</div>
								</div>
								
								<div class="col-md-12">
										<label>Alamat</label>
									<div class="form-group">
										<textarea name="alamat" class="form-control" cols="30" rows="7" placeholder="Alamat"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Daftar" class="btn btn-primary">
									</div>
								</div>
							</div>
							
						</div>
					</div>
			</form>
			</div>
		</div>
		
		<!-- END map -->
<?php include("footer.php") ?>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Google Map -->

	<script src="js/google_map.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

