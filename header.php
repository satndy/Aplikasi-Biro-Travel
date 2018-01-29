<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php"><i class="icon-airplane"></i>Blitar Tourism</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li ><a href="index.php">Home</a></li>
							<li>
								<a href="paket.php" class="fh5co-sub-ddown">Paket Wisata</a>
								
							</li>
				
							<li><a href="hotel.php">Hotel</a></li>
						
					
							<li><a href="contact.php">Contact</a></li>
	<?php session_start();

	if(isset($_SESSION['nama_user'])){
	?>	<li><a href="order.php">Order</a></li>

									<li>
								<a href="#" class="fh5co-sub-ddown"><?php echo "$_SESSION[nama_user]"; ?></a>
								<ul class="fh5co-sub-menu">
									<li><a href="profil.php">Profil</a></li>
									<li><a href="orderlist.php">Order List</a></li>
									<li><a href="logout.php">Log Out</a></li>
									
								
								</ul>
							</li>
							<li><img src="foto/<?php echo "$_SESSION[foto]"; ?>" width='50px' height='50px'/></li>
<?php
	}else{
	?>
							<li><a href="login.php">Log In</a></li>
							<?php
	}
	?>
						</ul>
					</nav>
				</div>
			</div>
		</header>