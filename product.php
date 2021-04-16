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
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

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
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" id="search">
                    </div>
                    <button type="submit" class="btn btn-primary" id="search_btn"><span
                            class="glyphicon glyphicon-search"></span></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart<span
                                class="badge">0</span></a>

                    </li>
                    <li><a href="login_form.php" class="glyphicon glyphicon-user">SignIn</a></li>

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