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
    <link rel="stylesheet" href="main.min.css">
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
                <div class="mainbanner-img col-xs-5">
                    <img class="img-responsive" src="images/mainbanner-img.png" alt="iphone">
                </div>
                <div class="mainbanner-content col-xs-7">
                    <div class="mainbanner-content-text">
                        <p class="lead">Lorem Ipsum is Simply</p>
                        <p>dummy text of the</p>
                        <p>printing & typesetting </p>
                        <img class="img-responsive sign-up" src="images/mainbanner-button.png" alt="sign up">
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight">
            <div class="container">
                <div class="highlight-item col-xs-12 col-sm-4">
                    <div class="highlight-item-img col-xs-3 col-sm-12">
                        <img class="img-responsive center-block" src="images/highlight_1.jpg" alt="highlight 1">
                    </div>
                    <div class="highlight-item-text col-xs-9 col-sm-12">
                        <div class="highlight-item-text-title">Contrary to popular</div>
                        <div class="highlight-item-text-desc">Lorem Ipsum is not simply random text. It has roots in a piece </div>
                    </div>
                </div>
                <div class="highlight-item col-xs-12 col-sm-4">
                    <div class="highlight-item-img col-xs-3 col-sm-12">
                        <img class="img-responsive center-block" src="images/highlight_2.jpg" alt="highlight 1">
                    </div>
                    <div class="highlight-item-text col-xs-9 col-sm-12">
                        <div class="highlight-item-text-title">Contrary to popular</div>
                        <div class="highlight-item-text-desc">Lorem Ipsum is not simply random text. It has roots in a piece </div>
                    </div>
                </div>
                <div class="highlight-item col-xs-12 col-sm-4">
                    <div class="highlight-item-img col-xs-3 col-sm-12">
                        <img class="img-responsive center-block" src="images/highlight_3.jpg" alt="highlight 1">
                    </div>
                    <div class="highlight-item-text col-xs-9 col-sm-12">
                        <div class="highlight-item-text-title">Contrary to popular</div>
                        <div class="highlight-item-text-desc">Lorem Ipsum is not simply random text. It has roots in a piece </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shoppingcart">
            <div class="container">
                <h2 class="title">The Shopping Cart</h2>
                <div class="shoppingcart-content">
                    <div class="shoppingcart-content-img col-xs-12 col-sm-6">
                        <img class="img-responsive" src="images/shopping_cart.jpg" alt="shopping cart">
                    </div>
                    <div class="shoppingcart-content-text col-xs-12 col-sm-6">
                        <p class="lead bold">Some Bullet text here</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever </p>
                        <p>When an unknown printer took a galley of type and scrambled </p>
                        <p>It to make a type specimen book. It has survived not only five centuries</p>
                        <p>But also the leap into electronic typesetting,</p>
                        <p>Remaining essentially unchanged. It was popularised </p>
                        <p>The release of Letraset sheets containing Lorem Ipsum passages</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <hr>
            <div class="container text-center">
                <span>Copyright &copy; 2012-2013 cssauthor.com</span>
            </div>
        </footer>
    </div>
    <!-- compiled js -->
    <script src="main.min.js" type="text/javascript" charset="utf-8" async defer></script>
</body>

</html>
