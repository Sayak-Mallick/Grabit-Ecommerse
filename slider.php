<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Product Slider</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="slider.css">
</head>
<body>

<div class="container">
    <div class="row" id="slider-text">
        <div class="col-md-6" >
            <h2>NEW COLLECTION</h2>
        </div>
    </div>
</div>

<!-- Item slider-->
<div class="container-fluid">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                <div class="carousel-inner">

                    <div class="item active">
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <a href="#"><img src="admin/products/product-1.jpg" style="width:230px;height:175px;" class="img-responsive center-block"></a>
                            <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                            <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                            <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <a href="#"><img src="admin/products/product-2.jpg" style="width:230px;height:175px;" class="img-responsive center-block"></a>
                            <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                            <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                            <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <a href="#"><img src="admin/products/product-3.jpg" style="width:230px;height:175px;" class="img-responsive center-block"></a>
                            <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                            <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                            <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <a href="#"><img src="admin/products/product-4.jpg" style="width:230px;height:175px;" class="img-responsive center-block"></a>
                            <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                            <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                            <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <a href="#"><img src="admin/products/product-5.jpg" style="width:230px;height:175px;" class="img-responsive center-block"></a>
                            <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                            <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                            <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <a href="#"><img src="admin/products/product-6.jpg" style="width:230px;height:175px;" class="img-responsive center-block"></a>
                            <a href="#"> <h4><b>PUMA</b><br>Men's Regular T-Shirt</h4></a>
                            <del style="color:#FF4848;"> <i class="fas fa-rupee-sign"></i> 2,499</del><b style="color: seagreen;"> <i class="fas fa-rupee-sign"></i> 1,724</b>
                            <br><p  ><i class="fas fa-rupee-sign"></i> 775 (31% OFF)<br>FREE Delivery by Grabit</p>
                        </div>
                    </div>

                </div>

                <div id="slider-control">
                    <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
                    <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Item slider end-->

<script>
    $(document).ready(function(){

        $('#itemslider').carousel({ interval: 3000 });

        $('.carousel-showmanymoveone .item').each(function(){
            var itemToClone = $(this);

            for (var i=1;i<6;i++) {
                itemToClone = itemToClone.next();

                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }

                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-"+(i))
                    .appendTo($(this));
            }
        });
    });

</script>

</body>
</html>