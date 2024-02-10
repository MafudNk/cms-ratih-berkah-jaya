<?php
include __DIR__ . '/../config/config.php';
?>

<section class="new-arrivals-products-area bg-gray section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>BEST SELLER</h2>
                    <p>We have the best seller products, it must be exciting for you</p>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                    <a href="<?php echo "$app_url"; ?>/pages/product-details.php?id=1">
                        <!-- Product Image -->
                        <div class="product-img">

                            <img src="<?php echo "$app_url"; ?>img/bg-img/chilli_jamu-modified.png" alt="">
                            <div class="product-tag">
                                <a href="#">Hot</a>
                            </div>

                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <p>Chilli Jamu</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="200ms">
                    <a href="<?php echo "$app_url"; ?>/pages/product-details.php?id=2">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/cardamom-modified.png" alt="">
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <p>Cardamom</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Single Product Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="400ms">
                    <a href="<?php echo "$app_url"; ?>/pages/product-details.php?id=4">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/abc_nutmeg-modified.png" alt="">
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">

                            <p>ABC Nutmeg</p>

                        </div>
                    </a>
                </div>
            </div>

            <div class="col-12 text-center">
                <a href=<?php echo "$product"; ?> class="btn alazea-btn">View All</a>
            </div>

        </div>
    </div>
</section>