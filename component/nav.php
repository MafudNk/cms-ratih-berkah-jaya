<?php 
 $base_url = "http://localhost/cms-ratih-berkah-jaya/";
 $about = "http://localhost/cms-ratih-berkah-jaya/pages/about.php";
 $shop = "http://localhost/cms-ratih-berkah-jaya/pages/shop.php";
 $shop_details = "http://localhost/cms-ratih-berkah-jaya/pages/shop-details.php";
 $portfolio = "http://localhost/cms-ratih-berkah-jaya/pages/portfolio.php";
 $contact = "http://localhost/cms-ratih-berkah-jaya/pages/contact.php";
?>
<header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="helpdesk@ratihberkahjaya.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: helpdesk@ratihberkahjaya.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+62 222222"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +62 222222</span></a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                                <!-- Language Dropdown -->
                                <!-- <div class="language-dropdown">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle mr-30" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">USA</a>
                                            <a class="dropdown-item" href="#">UK</a>
                                            <a class="dropdown-item" href="#">Bangla</a>
                                            <a class="dropdown-item" href="#">Hindi</a>
                                            <a class="dropdown-item" href="#">Spanish</a>
                                            <a class="dropdown-item" href="#">Latin</a>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Login -->
                                <!-- <div class="login">
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                </div> -->
                                <!-- Cart -->
                                <!-- <div class="cart">
                                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo-transparant.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href= <?php echo "$base_url"; ?>>Home</a></li>
                                    <li><a href=<?php echo "$about"; ?>>About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            
                                            <li><a href=<?php echo "$shop"?>>Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href=<?php echo "$shop"?>>Shop</a></li>
                                                    <li><a href=<?php echo "$shop_details"?>>Shop Details</a></li>
                                                </ul>
                                            </li>
                                            <!-- <li><a href="portfolio.php"?>>Portfolio</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio.php"?>>Portfolio</a></li>
                                                    <li><a href="single-portfolio.php"?>>Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.php"?>>Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single-post.php">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href=<?php echo "$shop"?>>Product</a></li>
                                    <li><a href=<?php echo "$portfolio"?>>Portfolio</a></li>
                                    <li><a href=<?php echo "$contact"?>>Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>