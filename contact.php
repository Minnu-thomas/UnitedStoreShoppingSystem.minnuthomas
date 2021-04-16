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

        #contact {}
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
    <div class="container">
    <div class="signup-form">
        <div class=" panel-heading text-center" style=" font-size:30px"> Contact US</div>
            <div class="panel-body">

                <form method ='post' action='email.php'>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="f_name">First Name</label>
                            <input type="text" id="f_name" name="f_name"
                                
                                class="form-control">

                        </div>
                        <div class="col-md-6">
                            <label for="f_name">Last Name</label>
                            <input type="text" id="l_name" name="l_name"
                            
                                class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email"
                                
                                class="form-control" >
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            <label for="address1">Your Message</label>
                            <textarea 
                            rows="4" cols="50"
                                name="message"
                                class="form-control"> 
                            </textarea>
                            
                        </div>
                    </div>
                    
                    <p><br /></p>
                    <div class="row">
                        <div class="col-md-12">
                            <input style="width:100%;" value="Submit" type="submit" name="" class="btn btn-success btn-lg">
                        </div>
                    </div>
                </form>
            </div>

        </div>
      
    </div>


    <?php require 'footer.php'; ?>
    <!-- =====  FOOTER END  ===== -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.js"
        integrity="sha512-OoT8BBAXFs0zmLqvvrEMM6HvHx3fNPWDt5jPw7wfN54pEpMPSdVllmi3dxUq6DFVwCIL1mSa4y9ZfgXaqI8VXA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"
        integrity="sha512-Mug9KHKmroQFMLm93zGrjhibM2z2Obg9l6qFG2qKjXEXkMp/VDkI4uju9m4QKPjWSwQ6O2qzZEnJDEeCw0Blcw=="
        crossorigin="anonymous"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
</body>

</html>