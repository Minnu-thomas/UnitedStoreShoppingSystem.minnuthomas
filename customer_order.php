<?php
//require "config/constants.php";

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
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery2.js"></script>
	<link rel="icon" href="product_images/Logo.png">
	<link rel="stylesheet" href="css/footer.css" />
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		table tr td {
			padding: 10px;
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

		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.0);
			text-align: center;
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
				<li><a href="product.php"><span class="glyphicon glyphicon-modal-window"></span> Product</a></li>
			</ul>
		</div>
	</div>

	<div class="container-fluid">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card" style="margin-bottom:20px">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Your Orders</h1>

						<?php
                            include_once 'db.php';
                            $user_id = $_SESSION['uid'];
                            $orders_list = "SELECT o.order_id,o.user_id,o.product_id,o.qty,p.product_title,p.product_price,p.product_image, o.date FROM orders o,products p WHERE o.user_id='$user_id' AND o.product_id=p.product_id";
                            $query = mysqli_query($con, $orders_list);
                            if (mysqli_num_rows($query) > 0) {
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
						<div class="row">
							<hr>
							<div class="col-md-6">
								<img style="float:right; width:160px"
									src="product_images/<?php echo $row['product_image']; ?>"
									class="img-responsive " />
							</div>
							<div class="col-md-6">
								<table>
									<tr>
										<td> Name</td>
										<td><b><?php echo $row['product_title']; ?></b>
										</td>
									</tr>
									<tr>
										<td> Price</td>
										<td><b><?php echo CURRENCY.' '.$row['product_price']; ?></b>
										</td>
									</tr>
									<tr>
										<td> Quantity</td>
										<td><b><?php echo $row['qty']; ?></b>
										</td>
									</tr>
									<tr>
										<td> Order Date</td>
										<td><b><?php echo $row['date']; ?></b>
										</td>
									</tr>



								</table>
							</div>
						</div>
						<?php
                                }
                            }
                        ?>

					</div>
				</div>
			</div>
			<div class="col-md-2"></div>

		</div>
		<?php require 'footer.php'; ?>
		<!-- =====  FOOTER END  ===== -->
	</div>
	</div>
</body>

</html>