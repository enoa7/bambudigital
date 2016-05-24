<?php 
    
    require_once 'php/mobile_detect.php';
    $detect = new Mobile_Detect;

?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prechu | Home</title>
    <!-- Compiled CSS -->
    <link rel="stylesheet" href="./main.min.css">
</head>

<body>
    <header class="page-header" id="megamenu">
        <div class="container">
            <div class="site-logo col-xs-6 col-sm-7">
                <img class="img-responsive" src="images/site-logo.jpg" alt="site logo">
            </div>
            <?php 
            if ( $detect->isMobile() ) { ?>
                <nav class="site-menu mobile col-xs-6 text-right visible-xs">
                    <img src="images/mobile_menu.jpg" alt="mobile - menu bar">
                </nav>
            <?php } else { ?>
            <nav class="site-menu desktop col-xs-6 col-sm-5 hidden-xs">
                <div class="site-menu-item">
                    <a href="">Home</a>
                </div>
                <div class="site-menu-item">
                    <a href="">Products</a>
                </div>
                <div class="site-menu-item">
                    <a href="">Services</a>
                </div>
                <div class="site-menu-item">
                    <a href="">Contact</a>
                </div>
            </nav>
            <?php }
            ?>

        </div>
    </header>
    <div class="page-content">
        <div class="mainbanner">
            <div class="container spacepad">
                <div class="mainbanner-img col-xs-6">
                    <img class="img-responsive" src="images/mainbanner-img.png" alt="iphone">
                </div>
                <div class="mainbanner-content col-xs-6">
                    <div class="mainbanner-content-text">
                        <p class="lead">Lorem Ipsum</p>
                        <p>Lorem ipsum dolor sit amet</p>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight">
            <div class="container">
                <div class="highlight-item col-xs-12 col-sm-4">
                    <div class="highlight-item-img">
                        <img class="img-responsive center-block" src="images/highlight_1.jpg" alt="highlight 1">
                    </div>
                    <div class="highlight-item-text col-xs-12">lalalalaalalallalalalla</div>
                </div>
                <div class="highlight-item col-xs-12 col-sm-4">
                    <div class="highlight-item-img">
                        <img class="img-responsive center-block" src="images/highlight_2.jpg" alt="highlight 1">
                    </div>
                    <div class="highlight-item-text col-xs-12">lalalalaalalallalalalla</div>
                </div>
                <div class="highlight-item col-xs-12 col-sm-4">
                    <div class="highlight-item-img">
                        <img class="img-responsive center-block" src="images/highlight_3.jpg" alt="highlight 1">
                    </div>
                    <div class="highlight-item-text col-xs-12">lalalalaalalallalalalla</div>
                </div>
            </div>
        </div>
    </div>
    <!-- compiled js -->
    <script src="./main.js" type="text/javascript" charset="utf-8" async defer></script>
</body>

</html>
