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
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="contact.css">


</head>

<body>
    <div class="wait overlay">
        <div class="loader"></div>
    </div>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse"
                    aria-expanded="false">
                    <span class="sr-only">navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" style="height:40px;"><img src="product_images/Logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" id="search">
                    </div>
                    <button type="submit" class="btn btn-primary" id="search_btn"><span
                            class="glyphicon glyphicon-search"></span></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
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
    <p><br /></p>
    <p><br /></p>
    <p><br /></p>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <figure>
                    <img src="images/about-page-gaando.jpg" alt="#" />
                </figure>
            </div>
            <div class="col-md-12">
                <div class="about-text">
                    <div class="about-heading-wrap">
                        <h2 class="about-heading mb_20 mt_40 ptb_10">
                            Official Manchester United Store
                        </h2>
                    </div>
                    <p>
                        There are many variations of passages of Lorem Ipsum
                        available, but the majority have suffered alteration in some
                        form, by injected humour, or randomised words which don't
                        look even slightly believable. If you are going to use a
                        passage of Lorem Ipsum, you need to be sure there isn't
                        anything embarrassing hidden in the middle of text. All the
                        Lorem Ipsum generators on the Internet tend to repeat
                        predefined chunks as necessary, making this the first true
                        generator on the Internet. It uses a dictionary of over 200
                        Latin words, combined with a handful of model sentence
                        structures, to generate Lorem Ipsum which looks reasonable.
                        The generated Lorem of text. All the Lorem Ipsum generators
                        on the Internet tend to repeat predefined chunks as
                        necessary, making this the first true generator on the
                        Internet. It uses a Ipsum is therefore always free from
                        repetition, injected humour, or non-characteristic words
                        etc.
                    </p>
                    <button type="button" class="btn mt_30">SHOP NOW</button>
                </div>
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
                        <div class="col-md-6 footer-block">
                            <h6 class="footer-title ptb_20">Information</h6>
                            <ul style="list-style:none">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="index.html">Chat</a></li>

                            </ul>
                        </div>


                        <div class="col-md-6 footer-block">
                            <h6 class="footer-title ptb_20">Contacts</h6>
                            <ul style="list-style:none">
                                <li>Warehouse & Offices,</li>
                                <li>12345 Street name, Bucharest RO</li>
                                <li>(+40) 0736 888 555</li>
                                <li>manchester@united.com</li>
                                <li><a href="index.php">www.manchester.united.com</a></li>
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
                                <div class="copyright-part text-center">@ 2019 All Rights Reserved </div>
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