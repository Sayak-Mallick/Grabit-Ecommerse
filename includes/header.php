<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Grab It</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/hr.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!--Animate CSS CDN---->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!--Font Awesome CDN---->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
<script src="https://kit.fontawesome.com/7ea881dee5.js" crossorigin="anonymous"></script>
</head>


<body style="font-family: 'JetBrains Mono', monospace;">
<div id="top"> <!---Top Starts---->
<div class="container"> <!---Container Starts---->
<div class="col-md-6 offers"> <!---col-md-6 Starts---->
<a href="#" class="btn btn-success btn-sm">
Welcome to Grab It
</a>
<a href="#">Cart Total Price: INR 100, Total items: 2</a>
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
<i class="fa fa-search"></i>
</button>
</span>
</div>
</form>
</div>

</div><!--navbar-collapse collapse End---->
</div>
</body><!--navbar default End------>