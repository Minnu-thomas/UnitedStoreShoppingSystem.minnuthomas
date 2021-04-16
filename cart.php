<?php

require 'config/constants.php';

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>United Store</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/footer.css" />
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="icon" href="product_images/Logo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			text-align: center;
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

		hr {
			border-top: 2px solid #bbb;
		}
	</style>
</head>

<body>
	<div class="wait overlay">
		<div class="loader"></div>
	</div>
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
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="product.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card " style='margin-bottom:40px'>
					<h3 style='margin-top:10px'></h3>
					<div class="panel-body">

						<div id="cart_checkout"></div>
					</div>
				</div>

			</div>
		</div>
		<div class="col-md-2"></div>

	</div>
	<?php require 'footer.php'; ?>
	<!-- =====  FOOTER END  ===== -->

	<script>
		var CURRENCY = '<?php echo CURRENCY; ?>';
	</script>
</body>

</html>