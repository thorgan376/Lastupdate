<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./css/styleneed.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/product.css">
</head>
<body>  
<?php
    require "database.php";
    if(isset($_GET['airconditionerid'])){
    $product = new product;   
    $data = $product->productsearch($_GET['airconditionerid']);
    $productname = $data["productname"];
    $productimg = $data["productimg"];
    $para1 = $data["para1"];
    $para2 = $data["para2"];
    $para3 = $data["para3"];
    $para4 = $data["para4"];
    $para5 = $data["para5"];
    $price = $data["price"];
    $info = $data["infomation"];
}
if(isset($_GET['search'])){
    if($_GET['search']==""){}
    else{
redirect("http://localhost:83/productsearch.php?search=".$_GET['search']);
    }
}
function redirect($url){
        echo '<script>window.location="'.$url.'"</script>';
    }
?>
   <div style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div>
                        <h1><a href="./index.php">
                            <img src="./image/logofix6.png" style="height: 65px; ">
                        </a></h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row border">
                        <div class="search-box">
                            <div>
                                <form id="form-search" role="form" method="GET" action="">
                                    <div>
                                        <div class="input-group ml-4" style="width: 100%">
                                            <input type="text" name="search" id="search" class="form-control"
                                                   placeholder="Search what you want...">
                                            <span class="input-group-btn">
                                                <button id="btn-search" value="search" class="btn btn" style="background-color: rgb(254, 209, 1);">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
        </div>
    </div>
    </div>
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="taskbar" href="./shoppage.php">Shop Me</a></li>
                        <li><a class="taskbar" href="./index.php">Home</a></li>
                        <li><a class="taskbar" href="./contactus.php">Contact Us</a></li>
                        <li><a class="taskbar" href="./aboutus.php">About Us</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
    <div class="carousel-inner overwirte" role="listbox" id="backgroundimgproduct" 
    style="background-image: url(./image/backgroundproductimg.jpg) !important;">
        <div>
            <div class="single-slide">
                <div class="slide-bg slide-one"></div>
                <div class="slide-text-wrapper">
                    <div class="slide-text">
                        <div class="container">
                            <div class="row">
                                <div class="productdivinfo">
                                <img src="<?php echo $productimg; ?>" class="productimginfo">
                                    <p class="productnameinfo"><?php echo $productname; ?></p>
                                    <p class="productpriceinfo"><?php echo $price; ?></p>
                                </div>
                                <div class="col-md-6 col-md-offset-6">
                                <p class="productintro">Product introduction</p>
                                    <p class="productintrotext"><?php echo $info; ?></p>
                                    <div class="slide-content">
                                        <div style="display: inline-block;" id="feature"><p>Basic product parameter</p>
                                        <ul style="display: inline;">
                                            <li id="parameter"><p>indoor size<span style="margin-left: 14px;">:<?php echo " ".$para1; ?></p></li>
                                            <li id="parameter"><p>outdoor size:<?php echo " ".$para1; ?></p></li>
                                            <li id="parameter"><p>Wattage<span style="margin-left: 43px;">:<?php echo " ".$para3; ?></span></p></li>
                                            <li id="parameter"><p>Origin<span style="margin-left: 68.5px;">:<?php echo " ".$para4; ?></span></p></li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 footeraboutus">
                    <div class="footer-about-us">
                        <h2>E<span>Pro</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt 
                            id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, 
                            modi aliquid eveniet eligendi iure at?</p>
                    </div>
                </div>
                
                
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><p>Fan</p></li>
                            <li><p>Air conditioner</p></li>
                            <li><p>Light bulb</p></li>
                            <li><p>Fridge</p></li>
                            <li><p>Microwave</p></li>
                        </ul>                        
                    </div>
                </div>
                <div class="subscribebox">
                    <div>
                        <h2 class="subheader">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div>
                            <form action="./index.php">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                            <br>
                            <p><?php echo " ".$welcome; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021 ePro. All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                    <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>