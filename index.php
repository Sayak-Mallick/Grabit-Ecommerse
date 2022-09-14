<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grab IT E-COMMERCE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hr.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/7ea881dee5.js" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!--Animate CSS CDN---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body style="font-family: 'JetBrains Mono', monospace;">
<div id="top"> <!---Top Starts---->
    <div class="container"> <!---Container Starts---->
        <div class="col-md-6 offers"> <!---col-md-6 Starts---->
            <a href="#" class="btn btn-success btn-sm">
                WEL-COME TO GRAB-IT
            </a>
            <a href="#">Cart Total Price: INR 100, Total items 2</a>
        </div><!---col-md-6 Ends---->

        <div class="col-md-6">
            <ul class="menu">
                <li><a href="customer_registration.php">Register</a></li>
                <li><a href="checkout.php">My Account</a></li>
                <li><a href="cart.php">Go To Cart</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
</div> <!---Top Ends---->
<div class="navbar navbar-default" id="navbar"> <!--navbar default start------>
    <div class="container">
        <div class="navbar-header"><!---navbar header Starts---->
            <a href="index.php" class="navbar-brand home">
                <img src="images/logo.png" style="width:150px;height:150px; padding-bottom:100px; "alt="GrabIT" class="hidden-xs">
                <img src="images/logo-small.png" style="width:100px;height:50px;" alt="GrabIT" class="visible-xs">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only"></span>
                <i class="fa fa-search"></i>
            </button>
        </div><!---navbar header End---->
        <div class="navbar-collapse collapse" id="navigation" "><!--navbar-collapse collapse start---->
        <div class="padding-nav"><!--------------------padding-nav Start--->
            <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="checkout.php">My Account</a></li>
                <li><a href="cart.php">Shopping Cart</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div><!--padding-nav end------------------------->
        <a href="cart.php" class="btn btn-primary navbar-btn right" style="color: rgb(255, 255, 255); background-color: rgb(79, 191, 168); border-color: rgb(65, 179, 156);">
            <i class="fa fa-shopping-cart"></i>
            <span>4 items in cart</span>
        </a>
        <div class="navbar-collapse collapse right"><!--navbar-collapse collapse-right start------>
            <button class="btn navbar-btn btn-primary" style="color: rgb(255, 255, 255); background-color: rgb(79, 191, 168); border-color: rgb(65, 179, 156);" type="button" data-toggle="collapse" data-target="#search">
                <span class="sr-only">toggle search</span>
                <i class="fa fa-search"></i>
            </button>
        </div><!--navbar-collapse collapse-right End------>
        <div class="collapse clearfix" id="search" >
            <form class="navbar-form " method="get" action="result.php">
                <div class="input-group" >
                    <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                    <span class="input-group-btn">
            <button type="submit" value="Search" name="search" class="btn btn-primary" style="color: rgb(255, 255, 255); background-color: rgb(79, 191, 168); border-color: rgb(65, 179, 156);">
            <i class="fa fa-search"></i></button></span>
                </div>
            </form>
        </div>

    </div><!--navbar-collapse collapse End---->
</div>
</div><!--navbar default End------>


<div class="container" id="slider"><!----------------slider start------------------------------------>
    <div class="col-md-12">
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="myCarousel"data-slider="0" class="action"></li>
                <li data-target="myCarousel"data-slider="1" ></li>
                <li data-target="myCarousel"data-slider="2" ></li>
                <li data-target="myCarousel"data-slider="3" ></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="admin/slider/slider1.jpg"  style="width:2200px; height:500px;" alt="">
                </div>
                <div class="item">
                    <img src="admin/slider/slider2.jpg" style="width:2200px; height:500px;" alt="">
                </div>
                <div class="item">
                    <img src="admin/slider/slider3.jpg" style="width:2200px; height:500px;" alt="">
                </div>
                <div class="item">
                    <img src="admin/slider/slider1.jpg" style="width:2200px; height:500px;" alt="">
                </div>

            </div>
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!---------------------slider End-------------------------><!---Container Ends----><br><br>

        <div id="advantage"><!--advantage div start-->
            <div class="container"><!--container start-->
                <div class="same-height-row"><!--same-height start-->
                    <div class="col-sm-4"><!--col-sm-4start-->
                        <div class="box same-height"><!--box same height start-->
                            <div class="icon"><!--Icon Start-->
                                <i class="fa fa-heart"></i>
                            </div><!--icon End-->
                            <h3>
                                <a href="#">Reliable Prices</a></h3>
                            <p>You can check on all other sites about the prices then compare with us.</p>

                        </div><!--box same height Close-->
                    </div><!--col-sm-4 Close-->

                    <div class="col-sm-4"><!--col-sm-4start-->
                        <div class="box same-height"><!--box same height start-->
                            <div class="icon"><!--Icon Start-->
                                <i class="fa fa-heart"></i>
                            </div><!--icon End-->
                            <h3>
                                <a href="#">100% SATISFACTION GURANTEED FROM US</a></h3>
                            <p>Free retuns on everything for 3 months</p>

                        </div><!--box same height Close-->
                    </div><!--col-sm-4 Close-->

                    <div class="col-sm-4"><!--col-sm-4start-->
                        <div class="box same-height"><!--box same height start-->
                            <div class="icon"><!--Icon Start-->
                                <i class="fa fa-heart"></i>
                            </div><!--icon End-->
                            <h3>
                                <a href="#">We love our customers</a></h3>
                            <p>We provide the best possible services</p>

                        </div><!--box same height Close-->
                    </div><!--col-sm-4 Close-->

                </div><!--same height row Close-->
            </div><!--container Close-->

        </div><!--advantage div End  --><br>

        <div id="hot">
            <div class="box">
                <div class="container">
                    <div class="col-md-12">
                        <center><h2>Latest Collection this week</h2></center>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="container">
            <div class="row">
                <div class="col-sm-3 col-sm-6 single"> <!-----col-sm-4 col-sm-6 single Starts------>
                    <div class="product">
                        <a href="details.php">
                            <img src="admin/products/product-1.png" class="img-responsive" >
                        </a>
                        <div class="text">
                            <h3><a href="details.php">PUMA NUMA</a></h3>
                            <p class="dsc text-center"">Shortline Front-Open Jacket</p>
                            <p class="price text-center"> <b style="color:#f05454;"> <del>3999</del></b> <b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b> <b style="color:#FF4848;">25% OFF</b></p>
                            <p class="save" style="text-align:center;"> Save  <i class="fas fa-rupee-sign"></i> 1,000</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default" style="background:#ffaa4c">View Details</a>
                                <a href="details.php" class="btn btn-primary ">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div> <!-----col-sm-4 col-sm-6 single Ends------>

                <div class="col-sm-3 col-sm-6 single"> <!-----col-sm-4 col-sm-6 single Starts------>
                    <div class="product">
                        <a href="details.php">
                            <img src="admin/products/product-4.png" class="img-responsive" >
                        </a>
                        <div class="text">
                            <h3><a href="details.php">PUMA NUMA</a></h3>
                            <p class="dsc text-center"">Shortline Front-Open Jacket</p>
                            <p class="price text-center"> <b style="color:#f05454;"> <del>3999</del></b> <b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b> <b style="color:#FF4848;">25% OFF</b></p>
                            <p class="save" style="text-align:center;"> Save  <i class="fas fa-rupee-sign"></i> 1,000</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default" style="background:#ffaa4c">View Details</a>
                                <a href="details.php" class="btn btn-primary ">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div> <!-----col-sm-4 col-sm-6 single Ends------>

                <div class="col-sm-3 col-sm-6 single"> <!-----col-sm-4 col-sm-6 single Starts------>
                    <div class="product">
                        <a href="details.php">
                            <img src="admin/products/product-6.png" class="img-responsive" >
                        </a>
                        <div class="text">
                            <h3><a href="details.php">PUMA NUMA</a></h3>
                            <p class="dsc text-center"">Shortline Front-Open Jacket</p>
                            <p class="price text-center"> <b style="color:#f05454;"> <del>3999</del></b> <b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b> <b style="color:#FF4848;">25% OFF</b></p>
                            <p class="save" style="text-align:center;"> Save  <i class="fas fa-rupee-sign"></i> 1,000</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default" style="background:#ffaa4c">View Details</a>
                                <a href="details.php" class="btn btn-primary ">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div> <!-----col-sm-4 col-sm-6 single Ends------>

                <div class="col-sm-3 col-sm-6 single"> <!-----col-sm-4 col-sm-6 single Starts------>
                    <div class="product">
                        <a href="details.php">
                            <img src="admin/products/product-5.jpg" class="img-responsive" >
                        </a>
                        <div class="text">
                            <h3><a href="details.php">PUMA NUMA</a></h3>
                            <p class="dsc text-center"">Shortline Front-Open Jacket</p>
                            <p class="price text-center"> <b style="color:#f05454;"> <del>3999</del></b> <b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b> <b style="color:#FF4848;">25% OFF</b></p>
                            <p class="save" style="text-align:center;"> Save  <i class="fas fa-rupee-sign"></i> 1,000</p>
                            <p class="buttons">
                                <a href="details.php" class="btn btn-default" style="background:#ffaa4c">View Details</a>
                                <a href="details.php" class="btn btn-primary ">
                                    <i class="fa fa-shopping-cart"></i> Add To Cart
                                </a>
                            </p>
                        </div>
                    </div>
                </div> <!-----col-sm-4 col-sm-6 single Ends------>
            </div>
        </div>


        <!---------------------------------------------------featured products----------------------------------------------------------------------------->

        <h2 class="title"><i>FEATURED PRODUCTS</i></h2>
        <div class="row">
            <div class="col-md-3">
                <a href="#"><img src="admin/products/product-1.jpg" style="width:230px;height:200px;"></a>
                <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                <div class="ratings" style="color: #ffaa4c;">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="admin/products/product-1.jpg" style="width:230px;height:200px;"></a>
                <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                <div class="ratings" style="color: #ffaa4c;">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="admin/products/product-1.jpg" style="width:230px;height:200px;"></a>
                <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                <div class="ratings" style="color: #ffaa4c;">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="admin/products/product-1.jpg" style="width:230px;height:200px;"></a>
                <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                <div class="ratings" style="color: #ffaa4c;">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
            </div>
        </div>

        <br><br>

        <div class="small-container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#"><img src="admin/products/product-1.jpg" style="width:230px;height:200px;"></a>
                    <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                    <div class="ratings" style="color: #ffaa4c;">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                    <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="admin/products/product-1.jpg" style="width:230px;height:200px;"></a>
                    <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                    <div class="ratings" style="color: #ffaa4c;">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                    <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="admin/products/product-1.jpg" style="width:230px;height:200px;"></a>
                    <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                    <div class="ratings" style="color: #ffaa4c;">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                    <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                </div>
                <div class="col-md-3">
                    <a href="#"><img src="admin/products/product-1.jpg" style="width:230px;height:200px;"></a>
                    <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                    <div class="ratings" style="color: #ffaa4c;">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                    <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                </div>
            </div>


        <?php
        include('brand.php')
        ?>
<br>
<br>
        <!-----Slider Start ----->
        <?php
        include('slider.php');
        ?>
        <!-----Slider Ends ----->

            <div class="brands">
                <div class="row">
                    <div class="imageColumn column">
                        <img src="admin/products/levis.jpg" alt="Snow">
                    </div>
                    <div class="imageColumn column">
                        <img src="admin/products/w.jpg" alt="Forest">
                    </div>
                    <div class="imageColumn column">
                        <img src="admin/products/Hrx_logo.jpg" alt="Mountains">
                    </div>
                    <div class="imageColumn column">
                        <img src="admin/products/max.jpg" alt="Mountains">
                    </div>
                    <div class="imageColumn column">
                        <img src="admin/products/puma.png" alt="Mountains">
                    </div>
                    <div class="imageColumn column">
                        <img src="admin/products/logo-oppo.png" alt="Mountains">
                    </div>
                    <div class="imageColumn column">
                        <img src="admin/products/logo-philips.png" alt="Mountains">
                    </div>
                </div>
            </div>


        <!-----Footer Starts----->
        <?php
        include('footer.php');
        ?>
        <!-----Footer Starts----->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>