<?php 
include __DIR__ . '/../config/config.php'; 
?>

<section class="new-arrivals-products-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>NEW ARRIVALS</h2>
                        <p>We have the latest products, it must be exciting for you</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/chilli_jamu-modified.png" alt="">
                            <div class="product-tag">
                                <a href="#">Hot</a>
                            </div>
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="<?php echo "$app_url"; ?>shop-details.html">
                                <p>Chilli Jamu</p>
                            </a>
                            <h6>$10.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="200ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/cardamom-modified.png" alt="">
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="shop-details.html">
                                <p>Cardamom</p>
                            </a>
                            <h6>$10.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/mung_bean-modified.png" alt="" >
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="shop-details.html">
                                <p>Mung Beans</p>
                            </a>
                            <h6>$10.99</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/abc_nutmeg-modified.png" alt="">
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="shop-details.html">
                                <p>ABC Nutmeg</p>
                            </a>
                            <h6>$10.99</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <a href=<?php echo "$shop"; ?> class="btn alazea-btn">View All</a>
                </div>

            </div>
        </div>
    </section>