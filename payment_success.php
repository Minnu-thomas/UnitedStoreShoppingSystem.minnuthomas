<?php
include 'db.php';
session_start();
if (!isset($_SESSION['uid'])) {
    header('location:index.php');
}

$user_id = $_SESSION['uid'];
$sql = "SELECT p_id,qty FROM cart WHERE user_id = '$user_id'";

$query = mysqli_query($con, $sql);
if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_array($query)) {
        $product_id[] = $row['p_id'];
        $qty[] = $row['qty'];
    }

    $date = date('Y-m-d');

    for ($i = 0; $i < count($product_id); ++$i) {
        $sql = "INSERT INTO orders (user_id,product_id,qty,date) VALUES ('$user_id','"
                    .$product_id[$i]."','".$qty[$i]."','".$date."')";
        echo $sql;
        mysqli_query($con, $sql);
        echo 'inserted';
    }
    $sql = "DELETE FROM cart WHERE user_id = '$user_id'";
    if (mysqli_query($con, $sql)) {
    }
}
        ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>United Store</title>
	<link rel="stylesheet" href="css/footer.css" />
	<link rel="stylesheet" href="css/signup.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="icon" href="product_images/Logo.png">
	<script src="js/jquery2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
	<style>
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			text-align: center;
		}

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


	<?php
        $user = "SELECT * FROM user_info WHERE user_id='$user_id'";

        $query = mysqli_query($con, $user);

        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_array($query);
            $fname = $row['first_name'];
            $lname = $row['last_name'];
            $email = $row['email'];
        } ?>
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 card" style="margin-bottom:30px">
				<div class="panel">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Thank you for shopping with us </h1>
						<hr />
						<p>Hello <?php echo '<b>'.$_SESSION['name'].'</b>'; ?>,Your
							payment was successfull <br />
						<form method='post' action='invoice.php' enctype="multipart/form-data">
							<input type="hidden" name='name'
								value="<?php echo $fname.' '.$lname; ?>" />
							<input type="hidden" name="email"
								value="<?php echo $email; ?>" />
							<input style="float:left; margin-right:20px" value="Send Invoice" type="submit" name=""
								class="btn btn-primary btn-md">
							<a href="index.php" style="float:right; margin-right:20px"
								class="btn btn-success btn-md">Continue Shopping</a>
						</form>

					</div>

				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>

</html>