<?php

include 'db.php';
session_start();
if (!isset($_SESSION['uid'])) {
    header('location:index.php');
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>United Store</title>
	<link rel="icon" href="product_images/Logo.png">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/footer.css" />
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<script src="main.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.0);
			text-align: center;
		}

		@media screen and (max-width:480px) {
			#search {
				width: 80%;
			}

			#search_btn {
				width: 30%;
				float: right;
				margin-top: -32px;
				margin-right: 10px;
			}
		}

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
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse"
					aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="product.php"><span class="glyphicon glyphicon-modal-window"></span> Shop</a></li>
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search">
					</li>
					<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn"> Search</button>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart<span
								class="badge">0</span></a>

					</li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
								class="glyphicon glyphicon-user"></span><?php echo 'Hi,'.$_SESSION['name']; ?></a>
						<ul class="dropdown-menu">
							<li><a href="account.php" style="text-decoration:none; color:blue;">Your Account</a></li>
							<li class="divider"></li>
							<li><a href="customer_order.php" style="text-decoration:none; color:blue;">Your Orders</a>
							</li>
							<li class="divider"></li>
							<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</div>

	<?php require 'getProduct.php'; ?>
	<?php require 'footer.php'; ?>
	<!-- =====  FOOTER END  ===== -->
	</div>
	</div>
</body>

</html>