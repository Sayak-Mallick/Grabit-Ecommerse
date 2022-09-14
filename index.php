<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grabit</title>
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    

</head>



<style>

@import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@200;300;400;500;600;700;800&display=swap');


body {
    font-family: 'JetBrains Mono', monospace;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333333;
    background-color: #f0f0f0;
}


#top {
    background-color: #42855B;
    padding: 10px 0;
}

#top .offer {
    color: #fff;
}

#top .offer .btn {
    text-transform: uppercase;
}

#top a {
    color: #fff;
    text-decoration: none;
}

#top ul.menu{
    padding-top: 5px;
    margin: 0;
    text-align: right;
    font-size: 12px;
    list-style: none;
}

#top ul.menu{
    text-align: center;
}

#top ul.menu > li {
    display: inline-block;
}

#top ul.menu > li a {
    color: #eeeeee;
}

#top ul.menu > li + li:before {
    content: '|\00a0';
    padding: 0 5px;
    color: #f7f7f7;
}

@media (max-width: 991px) {
    #top .offer {
        margin-bottom: 10px;
    }    
}

@media (max-width: 991px) {
    #top  {
        font-size: 12px;
        text-align: center;
    }
}

@media (max-width: 991px) {
    #top ul.menu {
        text-align: center;
    }
}


</style>



<body>
    
<div id="top">

<div class="container">
    <div class="col-md-6 offer">
        <a href="#" class="btn btn-primary">Welcome Guest</a>
        <a href="#">Shopping Cart Total: INR 100, Total Items: 2</a>
    </div>

    <div class="col-md-6">
        <ul class="menu">
            <li> <a href="customer_registration.php">Register</a></li>
            <li><a href="checkout.php">Register</a></li>
            <li><a href="customer_registration.php">Go To Cart</a></li>
            <li><a href="customer_registration.php">Login</a></li>
        </ul>
    </div>
</div>

</div>

</body>

<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</html>