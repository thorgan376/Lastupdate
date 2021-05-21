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
    <link rel="stylesheet" href="./css/slider.css">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="./image/webicon.png" type="image/png">
</head>
<body>
<?php
 require "database.php";
 if(isset($_GET['search'])){
     if($_GET['search']==""){}
     else{
redirect("http://localhost:83/productsearch.php?search=".$_GET['search']);
     }
}
if(isset($_GET['fanid']))
{
redirect("http://localhost:83/fan.php?fanid=".$_GET['fanid']);
}
if(isset($_GET['airconditionerid']))
{
redirect("http://localhost:83/airconditioner.php?airconditionerid=".$_GET['airconditionerid']);
}
if(isset($_GET['fridgeid']))
{
redirect("http://localhost:83/fridge.php?fridgeid=".$_GET['fridgeid']);
}
if(isset($_GET['lightbulbid']))
{
redirect("http://localhost:83/lightbulb.php?lightbulbid=".$_GET['lightbulbid']);
}
if(isset($_GET['microwaveid']))
{
redirect("http://localhost:83/microwave.php?microwaveid=".$_GET['microwaveid']);
}
function redirect($url){
echo '<script>window.location="'.$url.'"</script>';
}
?>
<div id="Home" style="background-color: black;">
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
                                <form id="form-search" role="form" method="GET" action="./index.php">
                                    <div>
                                        <div class="input-group ml-4" style="width: 100%">
                                            <input type="text" name="search" value="" id="search" class="form-control"
                                                   placeholder="Search what you want...">
                                            <span class="input-group-btn">
                                            <button id="btn-search" class="btn btn" style="background-color: rgb(254, 209, 1);">
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
                <div class="buttonleaddiv">
                    <a class="buttonlead" href="#download">Want to download our product information?</a>
                </div>
        </div>
    </div>
    </div>
    <div id="navbar" class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <!-- //////////////////////////////////////////////////////////////////////////////////////
                    ///////////////////////////////////////////////////////////////////////////////////////////////-->
                        <li><a class="taskbar" href="./shoppage.php">Shop me</a></li>
                        <!-- //////////////////////////////////////////////////////////////////////////////////////
                    ///////////////////////////////////////////////////////////////////////////////////////////////-->
                        <li><a class="taskbar" href="#Home">Home</a></li>
                        <li><a class="taskbar" href="#Fan">Fan</a></li>
                        <li><a class="taskbar" href="#Airconditioner">Air conditioner</a></li>
                        <li><a class="taskbar" href="#Lightbulb">Light bulb</a></li>
                        <li><a class="taskbar" href="#Fridge">Fridge</a></li>
                        <li><a class="taskbar" href="#Microwave">Microwave</a></li>
                        <li><a class="taskbar" href="contactus.php">Contact Us</a></li>
                        <li><a class="taskbar" href="aboutus.php">About Us</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
    <div class="slider-area">
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg" style="background-image: url(./image/slide-1.jpg);"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>The Incandescent bulbs</h2>
                                                <p>Coming soon product</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg" style="background-image: url(./image/slide-2.jpg);"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>18V Drill Master All Color</h2>
                                                <p>Coming soon product</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg" style="background-image: url(./image/slide-3.jpg);"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>SAMSUNG new fridge generation</h2>
                                                <p>Top selling</p>
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
    </div>
    <div class="productsectiontop divfixtop">
    <p class="tittletop" style="color: black; ">TOP SELLING</p>
    <center>
    <img src="./image/image/khung.jpg">
    </center>
    <center>
    <div class="productdivtop">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="fridgeid" value="e1" class="productname productnamefirst">
            <img src="./image/image/topselling1.jpg" class="productimg">
            <p>LG Smart Inverter</p>
            </button>
            <button type="submit" name="airconditionerid" value="b1" class="productname">
            <img src="./image/image/topselling2.jpg" class="productimg">
            <p>LG COOL Inverter</p>
            </button>
            <button type="submit" name="microwaveid" value="d1" class="productname">
            <img src="./image/image/topselling3.jpg" class="productimg">
            <p>T240 Microwave</p>
            </button>
            <button type="submit" name="microwaveid" value="d2" class="productname">
            <img src="./image/image/topselling4.jpg" class="productimg">
            <p>Panasonic Counter</p>
            </button>
            <button type="submit" name="fanid" value="a1" class="productname">
            <img src="./image/image/topselling5.jpg" class="productimg">
            <p>Toshiba Inverter</p>
            </button>
        </form>
        </div>
    </div>
    <div style="background-color: rgb(0, 0, 0);">
    <div id="Fan" class="productsection divfix" style="background-image: url(./image/buttonbg1.jpg); background-size: 100%;">
    <p class="tittle">Fan</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="fanid" value="a1" class="productname productnamefirst">
            <img src="./image/image/topselling5.jpg" class="productimg">
            <p>Toshiba Inverter</p>
            </button>
            <button type="submit" name="fanid" value="a2" class="productname">
            <img src="./image/image/fan2.jpg" class="productimg">
            <p>SenKo BXK45</p>
            </button>
            <button type="submit" name="fanid" value="a3" class="productname">
            <img src="./image/image/shopping.jpg" class="productimg">
            <p>SenKo BX1212</p>
            </button>
            <button type="submit" name="fanid" value="a4" class="productname">
            <img src="./image/image/download.jpg" class="productimg">
            <p>Tiross TS-952</p>
            </button>
            <button type="submit" name="fanid" value="a5" class="productname">
            <img src="./image/image/images.jpg" class="productimg">
            <p>Tiross HK-536</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    <div id="Airconditioner" class="productsection divfix" style="background-image: url(./image/buttonbg2.jpg);background-size: 100%;">
    <p class="tittle">Air conditioner</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="airconditionerid" value="b1" class="productname productnamefirst">
            <img src="./image/image/topselling2.jpg" class="productimg">
            <p>LG COOL Inverter</p>
            </button>
            <button type="submit" name="airconditionerid" value="b2" class="productname">
            <img src="./image/image/air-conditioner.jpg" class="productimg">
            <p>LG V10ENW1</p>
            </button>
            <button type="submit" name="airconditionerid" value="b3" class="productname">
            <img src="./image/image/airconditioner2.jpg" class="productimg">
            <p>Toshiba RAS-H10D</p>
            </button>
            <button type="submit" name="airconditionerid" value="b4" class="productname">
            <img src="./image/image/air3.jpg" class="productimg">
            <p>Daikin FTF25UV1V</p>
            </button>
            <button type="submit" name="airconditionerid" value="b5" class="productname">
            <img src="./image/image/air4.jpg" class="productimg">
            <p>LG B10END Inverter</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    <div id="Lightbulb" class="productsection divfix" style="background-image: url(./image/buttonbg3.jpg); background-size: 100%;">
    <p class="tittle">Light bulb</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="lightbulbid" value="c1" class="productname productnamefirst">
            <img src="./image/image/lightbulb1.jpg" class="productimg">
            <p>Smart light C-life</p>
            </button>
            <button type="submit" name="lightbulbid" value="c2" class="productname">
            <img src="./image/image/lightbulb2.jpg" class="productimg">
            <p>LED light FG37</p>
            </button>
            <button type="submit" name="lightbulbid" value="c3" class="productname">
            <img src="./image/image/lightbulb3.jpg" class="productimg">
            <p>LED light CM39</p>
            </button>
            <button type="submit" name="lightbulbid" value="c4" class="productname">
            <img src="./image/image/lightbulb4.jpg" class="productimg">
            <p>MAXBEN LED KJ17</p>
            </button>
            <button type="submit" name="lightbulbid" value="c5" class="productname">
            <img src="./image/image/lightbulb5.jpg" class="productimg">
            <p>YTA-95Z1</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    <div id="Fridge" class="productsection divfix" style="background-image: url(./image/buttonbg4.jpg); background-size: 100%;">
    <p class="tittle">Fridge</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="fridgeid" value="e1" class="productname productnamefirst">
            <img src="./image/image/topselling1.jpg" class="productimg">
            <p>LG Smart Inverter</p>
            </button>
            <button type="submit" name="fridgeid" value="e2" class="productname">
            <img src="./image/image/fridge2.jpg" class="productimg">
            <p>Samsung Inventer</p>
            </button>
            <button type="submit" name="fridgeid" value="e3" class="productname">
            <img src="./image/image/fridge3.jpg" class="productimg">
            <p>Toshiba KF316</p>
            </button>
            <button type="submit" name="fridgeid" value="e4" class="productname">
            <img src="./image/image/fridge4.jpg" class="productimg">
            <p>Panasonic MD86</p>
            </button>
            <button type="submit" name="fridgeid" value="e5" class="productname">
            <img src="./image/image/fridge5.jpg" class="productimg">
            <p>Toshiba JR435</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    <div id="Microwave" class="productsection divfix" style="background-image: url(./image/buttonbg5.jpg); background-size: 100%;">
    <p class="tittle">Microwave</p>
    <div class="productdiv">
        <div>
        <form action="./index.php" method="GET">
            <button type="submit" name="microwaveid" value="d1" class="productname productnamefirst">
            <img src="./image/image/topselling4.jpg" class="productimg">
            <p>Panasonic Counter</p>
            </button>
            <button type="submit" name="microwaveid" value="d2" class="productname">
            <img src="./image/image/topselling3.jpg" class="productimg">
            <p>T240 Microwave</p>
            </button>
            <button type="submit" name="microwaveid" value="d3" class="productname">
            <img src="./image/image/microwave3.jpg" class="productimg">
            <p>Panasonic MY435</p>
            </button>
            <button type="submit" name="microwaveid" value="d4" class="productname">
            <img src="./image/image/microwave4.jpg" class="productimg">
            <p>LG GF316</p>
            </button>
            <button type="submit" name="microwaveid" value="d5" class="productname">
            <img src="./image/image/microwave5.jpg" class="productimg">
            <p>Toshiba TFM435</p>
            </button>
        </form>
        </div>
    </div>
    </div>
    <div style="height: 60px;"></div>
    </div>
    </center>
    <div id="download" class="footer-top-area">
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
                <div>
                <h2 class="downloadhere">Download here:</h2>
                <div class="divword"><a class="downloadword" href="./eproject.docx" download>Word file</a></div>
                <div class="divpdf"><a class="downloadpdf" href="./eproject.pdf" download>PDF file</a></div>
                </div>
                <div class="subscribebox" style="margin-top: -167px;;">
                    <div>
                        <h2 class="subheader">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div>
                            <form action="./index.php">
                                <input type="email" name="subscribe" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                            <br>
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
<script src="./js/sticky.js"></script>
<script src="./js/bookmark.js"></script>  
</html>