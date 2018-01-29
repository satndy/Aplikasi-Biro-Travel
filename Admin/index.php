     <?php

     session_start();
if($_SESSION){
    header("Location: operator.php");
   


}elseif ($_SESSION) {
     header("Location: admin.php");
}

               include '../class/admin.php';
	$admin = new admin();

		
		if (isset($_SESSION['Login']))
		{
		    header("location:index.php");
		}

		if (isset($_POST['Login'])) {

			$login = $admin->login_admin($_POST['username'],$_POST['password']);
                    
                  
                     if($login ) {
         if(	$_SESSION['level'] == "1") {
            
          
              header("location: admin.php");
           
            } else if(	$_SESSION['level'] == "2") {
         
         
              header("location: operator.php");
           }
        
        }else {
           ?> 
          <!-- muncul peringatan kalau login gagal dan langsung kembali ke halaman login.php-->
          <script type="text/javascript">alert("Login Gagal ."); window.location.href="index.php"</script> <?php
            }
  }
                ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin BT</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="text-right">
			
			</div>
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Login</h3>
					</div>
					    <form role="form" action="" method="post">
					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" />
					</div>

                        <input type="submit" name="Login" class="btn btn-primary btn-block" value="Log in" />
                    </div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
