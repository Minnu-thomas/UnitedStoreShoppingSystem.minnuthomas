<?php
if (isset($_GET['register'])) {
    ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<link rel="icon" href="product_images/Logo.png">
	<title>United Store</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/footer.css" />
	<link rel="stylesheet" href="css/signup.css" />
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		header {
			background-color: #DB1D24;
			color: white;
			padding-top: 20px;
			padding-bottom: 10px;
			padding-left: 20px;
		}

		#img1 {
			width: 13%;
			max-width: 100%;
			display: block;
			margin: auto;
			padding-right: 35px;
		}
	</style>
</head>

<body>
	<div class="wait overlay">
		<div class="loader"></div>
	</div>
	<div class="navbar navbar-inverse">
		<header>
			<div>
				<!--  link to home -->
				<a href="index.php">

					<div>
						<img id="img1" src="product_images/logo1.PNG" alt="Welcome to Manchester united Store"
							title="Welcome to Utdstore.com">
					</div>
				</a>
			</div>
		</header>
		<div class="container-fluid">

			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="product.php"><span class="glyphicon glyphicon-modal-window"></span> Shop</a></li>
			</ul>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="signup-form">
					<div class=" panel-heading text-center" style=" font-size:30px"> Sign Up </div>
					<div class="panel-body">

						<form id="signup_form" onsubmit="return false">
							<div class="row">
								<div class="col-md-6">
									<label for="f_name">First Name</label>
									<input type="text" id="f_name" name="f_name" class="form-control">
								</div>
								<div class="col-md-6">
									<label for="f_name">Last Name</label>
									<input type="text" id="l_name" name="l_name" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="email">Email</label>
									<input type="text" id="email" name="email" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="password">Password</label>
									<input type="password" id="password" name="password" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="repassword">Re-enter Password</label>
									<input type="password" id="repassword" name="repassword" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="mobile">Mobile</label>
									<input type="text" id="mobile" name="mobile" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="address1">Address Line 1</label>
									<input type="text" id="address1" name="address1" class="form-control">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label for="address2">Address Line 2</label>
									<input type="text" id="address2" name="address2" class="form-control">
								</div>
							</div>
							<p><br /></p>
							<div class="row">
								<div class="col-md-12">
									<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"
										class="btn btn-success btn-lg">
								</div>
							</div>
							<div style='margin-top:20px'>

								Already a user ? <a href='login_form.php'> Sign In</a>

							</div>


					</div>
					</form>

				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
	<!-- =====  FOOTER END  ===== -->
</body>

</html>
<?php
}
