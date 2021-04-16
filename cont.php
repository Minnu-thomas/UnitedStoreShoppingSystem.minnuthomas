<?php
require 'config/constants.php';
session_start();
if (isset($_SESSION['uid'])) {
    //header('location:profile.php');
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
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .chat {
            width: 60px;
        }

        .retro {
            width: 100%;
            max-width: 100%;
            padding-bottom: 55px;
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

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-shopping-cart"></span> Cart<span class="badge">0</span></a>
                        <div class="dropdown-menu" style="width:400px;">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-3">Sl.No</div>
                                        <div class="col-md-3">Product Image</div>
                                        <div class="col-md-3">Product Name</div>
                                        <div class="col-md-3">Price in <?php echo CURRENCY; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div id="cart_product">
                                        <!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
                                    </div>
                                </div>
                                <div class="panel-footer"></div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-user"></span>SignIn</a>
                        <ul class="dropdown-menu">
                            <div style="width:300px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Login</div>
                                    <div class="panel-heading">
                                        <form onsubmit="return false" id="login">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" required />
                                            <label for="email">Password</label>
                                            <input type="password" class="form-control" name="password" id="password"
                                                required />
                                            <p><br /></p>
                                            <a href="#" style="color:white; list-style:none;">Forgotten
                                                Password</a><input type="submit" class="btn btn-success"
                                                style="float:right;">
                                        </form>
                                    </div>
                                    <div class="panel-footer" id="e_msg"></div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <h2 style="margin:30px auto; text-align: center;">Thank you for contacting us .We will get back to you soon.
        </h2>

        <div>

            <img src="product_images/main_banner1.jpg" alt="Retro jersey" class="retro">

        </div>
        <div class="footer" style="background-color: #101010; color:white">
            <div class="container">
                <div class="newsletters mt_30 mb_50">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="news-head pull-left">
                                <h2>Follow Our Updates !</h2>
                                <div class="new-desc">Be the First to know about our Fresh Arrivals and much more!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 footer-block">
                        <h4 class="footer-title ptb_20">Information</h4>
                        <ul style="list-style:none">
                            <li><a href="aboutUs.html">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="contact.html">Contact Us</a></li>

                        </ul>
                    </div>


                    <div class="col-md-3 footer-block">
                        <h4 class="footer-title ptb_20">Contacts</h4>
                        <ul style="list-style:none">
                            <li>Warehouse & Offices,</li>
                            <li>12345 Street name, Bucharest RO</li>
                            <li>(+40) 0736 888 555</li>
                            <li>manchester@united.com</li>
                            <li><a href="index.php">www.manchester.united.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-block">
                        <h4 class="footer-title ptb_20">Chat Here</h4>
                        <ul style="list-style:none">
                            <li><a href="chat.php"><img class="chat" src="chat.png"></img></a></li>

                        </ul>
                    </div>

                    <div class="col-md-3 footer-block">
                        <h4 class="footer-title ptb_20">Follow us</h4>
                        <ul style="list-style:none; display:flex; justify-content:space-around;">
                            <li class="icons"><a href="https://www.facebook.com/manchesterunited" target="_blank"
                                    class="fa fa-facebook" title="Facebook"></a>
                            </li>
                            <li class="icons"><a href="https://twitter.com/ManUtd" target="_blank" class="fa fa-twitter"
                                    title="Twitter"></a>
                            </li>
                            <li class="icons"><a href="https://www.youtube.com/manutd" target="_blank"
                                    class="fa fa-youtube" title="YouTube"></a></li>
                            <li class="icons"><a href="https://www.instagram.com/manchesterunited/" target="_blank"
                                    class="fa fa-instagram" title="Instagram"></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt_60 ptb_20">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="copyright-part text-center">@ 2021 All Rights Reserved </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- =====  FOOTER END  ===== -->
    </div>
    </div>
</body>

</html>