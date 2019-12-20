<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
    <!--Made with love by Mutiullah Samim -->
	<!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/bootstrap.min.css'); ?>">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css'); ?>">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css'); ?>">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form action="<?php echo base_url('Login/proses') ?>" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control" autofocus="autofocus" name="username" autocomplete="off" id="username" placeholder="username" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" autocomplete="off" id="password" placeholder="password" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
				<?php if ( $this->session->flashdata('error_msg')) { ?>
					<br>
					<br>
					<div class="alert alert-danger animated fadeInDown" role="alert" id="alert" >
						<strong>Peringatan !</strong>
						<?php echo $this->session->flashdata('error_msg'); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/bootstrap.min.js'); ?>"></script>
</body>
</html>