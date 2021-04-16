<?php
require_once 'vendor/autoload.php';
session_start();
$ip_add = getenv('REMOTE_ADDR');
include 'db.php';

    if (isset($_POST['category'])) {
        $category_query = 'SELECT * FROM categories';
        $run_query = mysqli_query($con, $category_query) or exit(mysqli_error($con));
        echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Categories</h4></a></li>
	";
        if (mysqli_num_rows($run_query) > 0) {
            while ($row = mysqli_fetch_array($run_query)) {
                $cid = $row['cat_id'];
                $cat_name = $row['cat_title'];
                echo "
					<li><a href='#' class='category' cid='$cid'>$cat_name</a></li>
			";
            }
            echo '</div>';
        }
    }

if (isset($_POST['brand'])) {
    $brand_query = 'SELECT * FROM brands';
    $run_query = mysqli_query($con, $brand_query);
    echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Brands</h4></a></li>
	";
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $bid = $row['brand_id'];
            $brand_name = $row['brand_title'];
            echo "
					<li><a href='#' class='selectBrand' bid='$bid'>$brand_name</a></li>
			";
        }
        echo '</div>';
    }
}
if (isset($_POST['page'])) {
    $sql = 'SELECT * FROM products';
    $run_query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run_query);
    $pageno = ceil($count / 30);
    for ($i = 1; $i <= $pageno; ++$i) {
        echo "
    		<li><a href='#' page='$i' id='page'>$i</a></li>
    	";
    }
}
if (isset($_POST['getProduct'])) {
    $limit = 30;
    if (isset($_POST['setPage'])) {
        $pageno = $_POST['pageNumber'];
        $start = ($pageno * $limit) - $limit;
    } else {
        $start = 0;
    }
    $product_query = "SELECT * FROM products LIMIT $start,$limit";
    $run_query = mysqli_query($con, $product_query);
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $pro_id = $row['product_id'];
            $pro_cat = $row['product_cat'];
            $pro_brand = $row['product_brand'];
            $pro_title = $row['product_title'];
            $pro_price = $row['product_price'];
            $pro_image = $row['product_image'];
            echo "
            <div class='col-lg-3 col-md-6 mb-4 mb-lg-0 col-sm-12'>
            <!-- Card-->
            <div class='card' style='margin:10px '>
                <div class='card-body p-4'><img style='width:150px'  src='product_images/$pro_image' class='img-fluid responsive d-block mx-auto mb-3'>
                    <h5>$pro_title</h5>
                    <ul class='list-inline small'>
                        <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                        <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                        <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                        <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                        <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                    </ul>
                    <p>".CURRENCY." $pro_price.00 </p>
                    <button type='button' class='btn btn-default btn-sm cart' style='margin-bottom:5px'pid='$pro_id'  id='product'>  
                    <span class='glyphicon glyphicon-shopping-cart'>  </span> <b> Add To cart </b> </button> 
                    
                </div>
            </div>
        </div>
		
			";
        }
    }
}
if (isset($_POST['get_seleted_Category']) || isset($_POST['selectBrand']) || isset($_POST['search'])) {
    if (isset($_POST['get_seleted_Category'])) {
        $id = $_POST['cat_id'];
        $sql = "SELECT * FROM products WHERE product_cat = '$id'";
    } elseif (isset($_POST['selectBrand'])) {
        $id = $_POST['brand_id'];
        $sql = "SELECT * FROM products WHERE product_brand = '$id'";
    } else {
        $keyword = $_POST['keyword'];
        $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
    }

    $run_query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($run_query)) {
        $pro_id = $row['product_id'];
        $pro_cat = $row['product_cat'];
        $pro_brand = $row['product_brand'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        $pro_image = $row['product_image'];
        echo "
        <div class='col-lg-3 col-md-6 mb-4 mb-lg-0 col-sm-12'>
        <!-- Card-->
        <div class='card' style='margin:10px '>
            <div class='card-body p-4'><img style='width:150px'  src='product_images/$pro_image' class='img-fluid responsive d-block mx-auto mb-3'>
                <h5>$pro_title</h5>
                <ul class='list-inline small'>
                    <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                    <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                    <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                    <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                    <li class='list-inline-item m-0'><i class='fa fa-star text-success'></i></li>
                </ul>
                <p>".CURRENCY." $pro_price.00 </p>
                <button type='button' class='btn btn-default btn-sm cart' style='margin-bottom:5px'pid='$pro_id'  id='product'>  
                <span class='glyphicon glyphicon-shopping-cart'>  </span> <b> Add To cart </b> </button> 
                
            </div>
        </div>
    </div>
    
			";
    }
}

    if (isset($_POST['addToCart'])) {
        $p_id = $_POST['proId'];

        if (isset($_SESSION['uid'])) {
            $user_id = $_SESSION['uid'];

            $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
            $run_query = mysqli_query($con, $sql);
            $count = mysqli_num_rows($run_query);
            if ($count > 0) {
                echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			"; //not in video
            } else {
                $sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
                if (mysqli_query($con, $sql)) {
                    echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
                }
            }
        } else {
            $sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
            $query = mysqli_query($con, $sql);
            if (mysqli_num_rows($query) > 0) {
                echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
                exit();
            }
            $sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
            if (mysqli_query($con, $sql)) {
                echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product is Added Successfully..!</b>
					</div>
				";
                exit();
            }
        }
    }

//Count User cart item
if (isset($_POST['count_item'])) {
    //When user is logged in then we will count number of item in cart by using user session id
    if (isset($_SESSION['uid'])) {
        $sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
    } else {
        //When user is not logged in then we will count number of item in cart by using users unique ip address
        $sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
    }

    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    echo $row['count_item'];
    exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
if (isset($_POST['Common'])) {
    if (isset($_SESSION['uid'])) {
        //When user is logged in this query will execute
        $sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
    } else {
        //When user is not logged in this query will execute
        $sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
    }
    $query = mysqli_query($con, $sql);
    if (isset($_POST['getCartItem'])) {
        //display cart item in dropdown menu
        if (mysqli_num_rows($query) > 0) {
            $n = 0;
            while ($row = mysqli_fetch_array($query)) {
                ++$n;
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_price = $row['product_price'];
                $product_image = $row['product_image'];
                $cart_item_id = $row['id'];
                $qty = $row['qty'];
                echo '
					<div class="row">
						<div class="col-md-3">'.$n.'</div>
						<div class="col-md-3"><img class="img-responsive" src="product_images/'.$product_image.'" /></div>
						<div class="col-md-3">'.$product_title.'</div>
						<div class="col-md-3">'.CURRENCY.''.$product_price.'</div>
					</div>';
            } ?>
<a style="float:right;" href="cart.php" class="btn btn-warning">Edit&nbsp;&nbsp;<span
        class="glyphicon glyphicon-edit"></span></a>
<?php
            exit();
        }
    }
    if (isset($_POST['checkOutDetails'])) {
        if (mysqli_num_rows($query) > 0) {
            //display user cart item with "Ready to checkout" button if user is not login
            echo ' <div class="row">

							<div class="col-md-2 col-xs-2"><b>Item</b></div>
							<div class="col-md-2 col-xs-2"><b> Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b> Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in <?php echo CURRENCY; ?></b></div>
							<div class="col-md-2 col-xs-2"><b>Remove / Update</b></div>
						</div> ';
            echo "<form method='post' action='login_form.php'>";
            $n = 0;
            while ($row = mysqli_fetch_array($query)) {
                ++$n;
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_price = $row['product_price'];
                $product_image = $row['product_image'];
                $cart_item_id = $row['id'];
                $qty = $row['qty'];

                echo '<div class="row">
								<hr class="solid">
								<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
								<input type="hidden" name="" value="'.$cart_item_id.'"/>
								<div class="col-md-2"><img class="img-responsive" style="margin:5px;" src="product_images/'.$product_image.'"></div>
								<div class="col-md-2">'.$product_title.'</div>
								<div class="col-md-2"><input type="text" class="form-control qty" value="'.$qty.'" ></div>
								<div class="col-md-2"><input type="text" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>
								<div class="col-md-2"><input type="text" class="form-control total" value="'.$product_price.'" readonly="readonly"></div>
                                <div class="col-md-2">
									<div class="btn-group" >
										<a href="#" remove_id="'.$product_id.'" class="btn btn-danger remove"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="#" update_id="'.$product_id.'" class="btn btn-primary update"><span class="glyphicon glyphicon-ok-sign"></span></a>
									</div>
								</div>
							</div>';
            }

            echo '<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b class="net_total" style="font-size:20px;"> </b>
					</div>';
            if (!isset($_SESSION['uid'])) {
                echo '  <a href="product.php" style="float:left; margin-left:50px;"><button type="button" class="btn btn-success" >Back to Shop</button> </a>
                        <input type="submit" style="float:right; margin-right:65px;" name="login_user_with_product" class="btn btn-info btn-md" value="Proceed to Checkout" >
							</form>';
            } elseif (isset($_SESSION['uid'])) {
                //Paypal checkout form
                echo '
						</form>
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="business" value="sb-rksba5277935@business.example.com">
							<input type="hidden" name="upload" value="1">';

                $x = 0;
                $sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
                $query = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    ++$x;
                    echo '<input type="hidden" name="item_name_'.$x.'" value="'.$row['product_title'].'">
								  	 <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
								     <input type="hidden" name="amount_'.$x.'" value="'.$row['product_price'].'">
								     <input type="hidden" name="quantity_'.$x.'" value="'.$row['qty'].'">';
                }

                echo '  <a href="profile.php" style="float:left; margin-left:50px;"><button type="button" class="btn btn-success" >Back to Shop</button> </a>
                        <input type="hidden" name="return" value="http://production/payment_success.php"/>
					                <input type="hidden" name="notify_url" value="http://production/payment_success.php">
									<input type="hidden" name="currency_code" value="USD"/>
									<input type="hidden" name="custom" value="'.$_SESSION['uid'].'"/>
									<input style="float:right;margin-right:60px;" type="image" name="submit"
										src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-medium.png"
										alt="PayPal - The safer, easier way to pay online" alt="PayPal Checkout"
										alt="PayPal - The safer, easier way to pay online">
								</form>';
            }
        } else {
            echo ' <h3 style=" text-decoration: none;"> Your cart is empty <a href="product.php"> Shop here.</a></h3>';
        }
    }
}

//Remove Item From cart
if (isset($_POST['removeItemFromCart'])) {
    $remove_id = $_POST['rid'];
    if (isset($_SESSION['uid'])) {
        $sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
    } else {
        $sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
    }
    if (mysqli_query($con, $sql)) {
        echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
        exit();
    }
}

//Update Item From cart
if (isset($_POST['updateCartItem'])) {
    $update_id = $_POST['update_id'];
    $qty = $_POST['qty'];
    if (isset($_SESSION['uid'])) {
        $sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
    } else {
        $sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
    }
    if (mysqli_query($con, $sql)) {
        echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
        exit();
    }
}
