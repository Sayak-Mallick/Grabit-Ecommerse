<?php 
include('header.php')
?>

<style>   
/* Breadcrmb Section */
.breadcrumb{
padding: 8px 15px;
margin-bottom: 20px;
background-color: #ffffff;
border-radius: 0;
box-shadow: 0 1px 5px rgba(0,0,0,0.5);
}

.breadcrumb > li + li:before {
content: ">\00a0";
color: #cccccc;
}

@media (max-width: 991px) {
.breadcrumb {
padding: 8px 0;
text-align: center;
}  
}
</style>

<div id="content">  <!---Content Starts---->
<div class="container"> <!---Container Starts---->
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li>Shop</a></li>
</ul>
</div>
<div class="col-md-3"><!---col-md-3 Starts---->
<?php
include('sidebar.php');
?>
</div><!---col-md-3 Endss---->


<div class="col-md-9">
<div class="row" id="productmain"> <!----Row Starts---->
<div class="col-sm-6"> <!---col-sm-6 Starts---->
<div id="mainimage">
<div id="mycarousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li class="active" data-target="#mycarousel" data-slide-to="0"></li>
<li  data-target="#mycarousel" data-slide-to="1"></li>
<li  data-target="#mycarousel" data-slide-to="2"></li>
</ol>
<div class="carousel-inner"> <!----Carousel Inner Starts---->
<div class="item active">
<center>
<img src="admin/products/product-1.png" style="height:500px;" class="img-responsive" alt="">
</center>
</div>
<div class="item">
<center>
<img src="admin/products/product-4.png" style="height:500px;" class="img-responsive" alt="">
</center>
</div>
<div class="item">
<center>
<img src="admin/products/product-6.png" style="height:500px;" class="img-responsive" alt="">
</center>
</div>
</div><!----Carousel Inner Ends---->
<a href="#mycarousel" class="left carousel-control" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>

<a href="#mycarousel" class="right carousel-control" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
</div><!---col-sm-6 Ends---->
<div class="col-sm-6">
<div class="box"> <!----Box Starts---->
<h1 class="text-center">PUMA Mens T-Shirts</h1>
<form action="details.php" method="post" class="form-horizontal"> <!--- Form Starts----->
<div class="form-group"> <!---form-group Starts---->
<label class="col-md-5 control-label" for="">Product Quantity </label>
<div class="col-md-7"> <!---Col-Md-7 Starts---->
<select name="product_qty" class="form-control" id="">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</div>  <!---Col-Md-7 Ends---->
</div> <!---form-group ends---->
<div class="form-group">
<label class="col-md-5 control-label" for="">Product Size</label>
<div class="col-md-7">
<select name="product_size" class="form-control" id="">
<option>Select a size</option>
<option>Small</option>
<option>Medium</option>
<option>Large</option>
<option>Extra Large</option>
</select>
</div>
</div>
<p class="price text-center"> <b style="color:#f05454;"> <del>3999</del></b> <b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b> <b style="color:#FF4848;">25% OFF</b></p>
<p class="text-center buttons">
<button class="btn btn-primary" type="submit">
<i class="fa fa-shopping-cart"></i> Add To Cart
</button>
</p>
</form> <!--- Form Ends----->
</div> <!----Box Ends---->

<div class="col-xs-4">
<a href="#" class="thumb">
<img src="admin/products/apple-9-7-ipad-32-gb-space-grey.jpg" class="img-responsive" alt="">
</a>
</div>
<div class="col-xs-4">
<a href="#" class="thumb">
<img src="admin/products/apple-9-7-ipad-32-gb-space-grey.jpg" class="img-responsive" alt="">
</a>
</div>
<div class="col-xs-4">
<a href="#" class="thumb">
<img src="admin/products/apple-9-7-ipad-32-gb-space-grey.jpg" class="img-responsive" alt="">
</a>
</div>


</div>
</div> <!----Row Ends---->

<div class="box" id="details">
<h4>Product Details</h4>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis vero animi debitis vitae ad fugiat sapiente eligendi necessitatibus sed ex quidem cupiditate ut eius facere expedita laborum, eos a illo. </p>
<h4>Size</h4>
<ul>
<li>Small</li>
<li>Medium</li>
<li>Large</li>
<li>Extra Large</li>
</ul>
</div>

<!-- <div id="row same-height-row"> -
<div class="col-md-3 col-sm-6"> 
<div class="box same-height headline">
<h3 class="text-center">You Will Also Like These Products</h3>
</div>
</div> 
<--Col-md-3 Ends---->

<div id="hot"><!-------hot-start---->
<div class="box">
<div class="container">
<div class="col-md-8"><h2 style="text-align:center;">You May Also Like</h2></div>
</div>
</div>
</div><!-------hot-End---->


<div class="col-md-4 center-responsive"> <!---col-md-4 Starts---->
<div class="product same-height"> <!---Product Starts---->
<a href="#">
<img src="admin/products/product-1.jpg" style="width:300px; height:200px;" class="img-responsive" >
</a>
<div class="text">
<h3><a href="details.php">ZARA Ethnic Wear</a></h3>
<p class="price text-center"> <b style="color:#f05454;"> <del>3999</del></b> <b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b> <b style="color:#FF4848;">25% OFF</b></p>
<p class="buttons">
<a href="details.php" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>  Add to Cart
</a>
</p>
</div> 
</div>  <!---Product Ends---->
</div><!---col-md-4 Ends---->

<div class="col-md-4 center-responsive"> <!---col-md-4 Starts---->
<div class="product same-height"> <!---Product Starts---->
<a href="#">
<img src="admin/products/product-4.jpg" style="width:300px; height:200px;" class="img-responsive" >
</a>
<div class="text">
<h3><a href="details.php">ZARA Ethnic Wear</a></h3>
<p class="price text-center"> <b style="color:#f05454;"> <del>3999</del></b> <b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b> <b style="color:#FF4848;">25% OFF</b></p>
<p class="buttons">
<a href="details.php" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>  Add to Cart
</a>
</p>
</div> 
</div>  <!---Product Ends---->
</div><!---col-md-4 Ends---->


<div class="col-md-4 center-responsive"> <!---col-md-4 Starts---->
<div class="product same-height"> <!---Product Starts---->
<a href="#">
<img src="admin/products/product-6.jpg" style="width:300px; height:200px;" class="img-responsive" >
</a>
<div class="text">
<h3><a href="details.php">ZARA Ethnic Wear</a></h3>
<p class="price text-center"> <b style="color:#f05454;"> <del>3999</del></b> <b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b> <b style="color:#FF4848;">25% OFF</b></p>
<p class="buttons">
<a href="details.php" class="btn btn-primary">
<i class="fa fa-shopping-cart"></i>  Add to Cart
</a>
</p>
</div> 
</div>  <!---Product Ends---->
</div><!---col-md-4 Ends---->

</div> <!---row Ends---->

</div>


</div> <!---Container Ends---->
</div><!---Content ends---->


<!-----Footer Start ----->
<?php
include('footer.php');
?>
<!-----Footer Ends ----->
