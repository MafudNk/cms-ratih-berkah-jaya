
<?php 
include __DIR__ . '/../config/config.php'; 
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
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+62 821-3199-5992"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +62 821-3199-5992</span></a>
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
                        <a href="index.php" class="nav-brand"><img src="<?php echo "$app_url"; ?>img/core-img/logo-transparant.png" alt=""></a>

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
                                    <li><a href= <?php echo "$app_url"; ?>>Home</a></li>
                                    
                                    <li><a href="#">About</a>
                                        <ul class="dropdown">
                                            <li><a href="https://ratihberkahjaya.com/files/f864a91f49ed1f907d4d357796dcf3b1e4c31c1c.pdf" target="_blank">Company Profile</a>
                                            </li>
                                            <li><a href=<?php echo "$about"; ?>>About</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=<?php echo "$shop"?>>Product</a></li>
                                    <li><a href=<?php echo "$contact"?>>Contact</a></li>
                                </ul>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </header>