<?php
//this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
//if below statment return true then we will send user to their profile.php page
if (isset($_SESSION['uid'])) {
    header('location:profile.php');
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST['login_user_with_product'])) {
    //this is product list array
    $product_list = $_POST['product_id'];
    //here we are converting array into json format because array cannot be store in cookie
    $json_e = json_encode($product_list);
    //here we are creating cookie and name of cookie is product_list
    setcookie('product_list', $json_e, strtotime('+1 day'), '/', '', '', true);
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>United Store</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="icon" href="product_images/Logo.png">
	<link rel="stylesheet" href="css/footer.css" />
	<link rel="stylesheet" href="css/signup.css" />
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

	<div class="navbar navbar-inverse ">
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
	<p><br /></p>
	<p><br /></p>
	<p><br /></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">

				<div class="signup-form">
					<div class="panel-heading text-center" style=" font-size:30px; text-align:centre">Login
					</div>
					<div class="text-center" id="e_msg"></div>
					<div class="panel-body">
						<!--User Login Form-->
						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required />
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" required />
							<p><br /></p>
							<!-- <a href="#" style="color:#333; list-style:none;">Forgotten Password</a>
							 -->
							<!--If user dont have an account then he/she will click on create account button-->
							<!-- <input type="submit" class="btn btn-success" style="float:right;" Value="Login"> -->
							<div class="row">
								<div class="col-md-12">
									<input style="width:100%;" value="Login" type="submit"
										class="btn btn-success btn-lg">
								</div>
							</div>
							<div style='margin-top:20px'>New User ?<a href="customer_registration.php?register=1">
									Register</a></div>
						</form>

					</div>


				</div>
			</div>
		</div>

		<div class="col-md-4"></div>
	</div>
	<?php require 'footer.php'; ?>
	<!-- =====  FOOTER END  ===== -->
</body>

</html>