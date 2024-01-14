<!DOCTYPE html>
<html lang="en">

<?php include 'component/head.php'; ?>
<link rel="stylesheet" href="style2.css" type="text/css">
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/logo.jpg" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->



    <?php include 'component/nav.php'; ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <?php include 'component/hero.php'; ?>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <?php include 'component/our_services.php'; ?>
    <!-- ##### Service Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <?php include 'component/about_us.php'; ?>
    <!-- ##### About Area End ##### -->

    <!-- ##### Portfolio Area Start ##### -->
    <!-- ##### Portfolio Area End ##### -->

    <!-- ##### Testimonial Area Start ##### -->

    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Product Area Start ##### -->
    <?php include 'component/product.php'; ?>
    <!-- ##### Product Area End ##### -->
    <div class="login-popup">
        <div class="box">
            <div class="img-area">
                <div class="img">
                </div>
                <h1>Your Logo</h1>
            </div>
            <div class="form">
                <div class="close">&times;</div>
                <h1>Log In</h1>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox">
                            Remember Me
                        </label>
                    </div>
                    <button type="button" class="btn">Log In</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ##### Subscribe Area Start ##### -->
    <section class="subscribe-newsletter-area" style="background-image: url(img/bg-img/subscribe.png);">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading mb-0">
                        <h2>Join the Newsletter</h2>
                        <p>Subscribe to our newsletter and get 10% off your first purchase</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="subscribe-form">
                        <form action="#" method="get">
                            <input type="email" name="subscribe-email" id="subscribeEmail" placeholder="Enter your email">
                            <button type="submit" class="btn alazea-btn">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Side Thumbnail -->
        <div class="subscribe-side-thumb wow fadeInUp" data-wow-delay="500ms">
            <img class="first-img" src="img/core-img/leaf.png" alt="">
        </div>
    </section>
    <!-- ##### Subscribe Area End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <?php include 'component/contact.php'; ?>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include 'component/footer.php'; ?>
    <!-- ##### Footer Area End ##### -->


    <script src="script.js"></script>
    <!-- ##### All Javascript Files ##### -->
    <?php include 'component/js.php'; ?>

</body>

</html>