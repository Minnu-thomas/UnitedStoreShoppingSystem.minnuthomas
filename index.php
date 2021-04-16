<?php
require 'config/constants.php';

session_start();
if (isset($_SESSION['uid'])) {
    header('location:profile.php');
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>United Store</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="icon" href="product_images/Logo.png">
	<link rel="stylesheet" href="css/footer.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<script src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
	<style>
		.headline {
			margin-top: 0;
			text-align: center;
			font-size: 30px;
			font-weight: 600;
		}

		.trending {
			margin: 5px auto;
		}

		.retro {
			width: 100%;
			max-width: 100%;
		}

		.home-content-header {
			font-size: 50px;
			text-align: center;

		}

		.home-content {
			overflow: scroll;
			text-align: justify;
			padding: 20px;
			padding-bottom: 30px;
			overflow-x: hidden;
			font-size: 15px;
			height: 200px;
			margin-bottom: 20px;
			font-weight: 400;
		}


		h4 {
			font-size: 25px;
			font-weight: 700;
			margin: 20px;
			font-family: 'Montserrat', sans-serif;
		}

		iframe {
			width: 100%;
			height: 340px;
		}

		.home-content,
		.home-content-header,
		.headline {
			font-family: 'Montserrat', sans-serif;
		}

		#img1 {
			width: 13%;
			max-width: 100%;
			display: block;
			margin: auto;
			padding-right: 35px;
		}

		header {
			background-color: #DB1D24;
			color: white;
			padding-top: 20px;
			padding-bottom: 10px;
			padding-left: 20px;
		}
	</style>
</head>

<body>
	<div class="wait overlay">
		<div class="loader"></div>
	</div>
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
	<div class="navbar navbar-inverse">

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
					<li><a href="product.php"><span class="glyphicon glyphicon-modal-window"></span> Shop</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart<span
								class="badge">0</span></a>
					</li>
					<li><a href="login_form.php" class="glyphicon glyphicon-user">SignIn</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<a href="product.php"><img src="product_images/M4.jpg" alt="Retro jersey" class="retro"> </a>
			<div class="headline">
				<img src="product_images/trending.png">
			</div>
			<div class="container-fluid" margin="20px 0">
				<div class="row row-no-gutter">
					<div class="col-sm-6 col-md-4 col-lg-2 img-responsive ">
						<a href="product.php"><img src="product_images/martial.jpg" alt="Retro jersey" width="100%">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-2 img-responsive ">
						<a href="product.php"><img src="product_images/Rashford.jpg" alt="Retro jersey" width="100%">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-2 img-responsive ">
						<a href="product.php"><img src="product_images/fernandes.jpg" alt="Retro jersey" width="100%">
						</a>
					</div>
					<div class="col-sm-6  col-md-4 col-lg-2 img-responsive">
						<a href="product.php"><img src="product_images/greenwood.jpg" alt="Retro jersey" width="100%">
						</a>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-2 img-responsive">
						<a href="product.php"><img src="product_images/wan.jpg" alt="Retro jersey" width="100%"> </a>
					</div>
					<div class="col-sm-6 col-md-4  col-lg-2 img-responsive">
						<a href="product.php"><img src="product_images/M6.jpg" alt="Retro jersey" width="100%"> </a>
					</div>
				</div>
			</div>


			<div>
				<a href="product.php"><img src="product_images/M3.jpg" alt="Retro jersey" class="retro"> </a>

				<a href="product.php"><img src="product_images/Retro-Jersey.jpg" alt="Retro jersey" class="retro"> </a>


			</div>

			<div class="container-fluid" margin="20px 0">
				<div class="row row-no-gutter">
					<div class="col-md-6 img-responsive">
						<a href="product.php"><img src="product_images/M1.jpg" alt="Retro jersey" width="100%"> </a>
					</div>
					<div class="col-md-6 img-responsive">
						<a href="product.php"><img src="product_images/M2.jpg" alt="Retro jersey" width="100%"> </a>
					</div>
				</div>
			</div>


			<div class="home-content">

				<p> Let United Direct serve as your premier source of authentic Manchester United kits and gear! Suit up
					like
					your favourite footballers when you shop Manchester United kits for men, women and youth fans, as
					well
					as
					the ultimate collection of accessories and collectibles.
				</p>

				<p>No Man Utd fan’s closet is complete without the latest kits and jerseys. Browse authentic Man Utd
					home
					and
					away kits, as well as 2019/20 Man U third jerseys and goalkeeper kits. Represent Red Devils legends
					with
					Marcus Rashford, Bruno Fernandes and Paul Pogba jerseys, or create a custom jersey, complete with
					your
					own
					name and number. Make sure you’re prepared for your next trip to Old Trafford with Manchester United
					apparel
					and training gear for the whole family, and score some exclusive Man Utd accessories to complete
					your
					ensemble or display in your home or office.
				</p>

				<p>The Manchester United Online Megastore is committed to bringing you the easiest, most stress-free
					shopping
					experience online. Contact our dedicated customer service team for any concerns, or find answers to
					frequently asked questions in the customer service navigation tool.
				</p>
			</div>

			<div class="container-fluid" style="margin-top: 30px">
				<div class="row ">
					<div class="col-md-6 img-responsive">

						<strong>
							<h4 class="videos">Manchester United Home Kit Inspired by 1999 Champions league win</h4>
						</strong>
						<iframe src="https://www.youtube.com/embed/X8YsqSnHz4g" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen width="100%" height="100%">
						</iframe>
					</div>
					<div class="col-md-6 img-responsive">
						<strong>
							<h4 class="videos">Manchester United Third Kit Inspired by Iconic Black Kits from past</h4>
						</strong>
						<iframe src="https://www.youtube.com/embed/t14ZmblaQuI" frameborder="0"
							allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen width="100%" height="100%"></iframe>
					</div>
				</div>
			</div>


		</div>
		<?php require 'footer.php'; ?>
		<!-- =====  FOOTER END  ===== -->
	</div>
	</div>
</body>

</html>