<!DOCTYPE html>
<html lang="en">

<?php include '../component/head.php'; ?>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include '../component/nav.php'; ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(http://localhost/alazea/img/bg-img/24.jpg);">
            <h2>Product</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
           <!-- data dummy shop -->
            <?php
            $shop = [
               
                [
                    'image' => 'http://localhost/alazea/img/bg-img/40.png',
                    'tag' => '<div class="product-tag"> <a href="#">Hot</a> </div>',
                    'name' => 'Cactus Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/alazea/img/bg-img/41.png',
                    'tag' => '',
                    'name' => 'Cactus Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/alazea/img/bg-img/42.png',
                    'tag' => '',
                    'name' => 'Cactus Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/alazea/img/bg-img/43.png',
                    'tag' => '',
                    'name' => 'Cactus Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/alazea/img/bg-img/44.png',
                    'tag' => '',
                    'name' => 'Cactus Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/alazea/img/bg-img/45.png',
                    'tag' => '',
                    'name' => 'Cactus Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/alazea/img/bg-img/46.png',
                    'tag' => '',
                    'name' => 'Cactus Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/alazea/img/bg-img/47.png',
                    'tag' => '<div class="product-tag sale-tag"> <a href="#">Sold Out</a> </div>',
                    'name' => 'Cactus Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/alazea/img/bg-img/48.png',
                    'tag' => '',
                    'name' => 'Cactus Flower',
                    'price' => '$10.99'
                ],

            ];
            ?>
            <div class="row">
                <!-- Sidebar Area -->
                <div class="col-md-2 col-lg-2">
                    <div class="shop-sidebar-area">


                    </div>
                </div>

                <!-- All Products Area -->
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop-products-area">
                        <div class="row">
                            <?php
                            foreach ($shop as $key => $value) { ?>
                                <!-- Single Product Area -->
                                <div class="col-12 col-sm-6 col-lg-4">
                                    <div class="single-product-area mb-50">
                                        <!-- Product Image -->
                                        <div class="product-img">
                                            <a href="shop-details.html"><img src=<?php print_r($value['image']); ?> alt=""></a>
                                            <!-- Product Tag -->
                                            <?php print_r($value['tag']); ?>

                                        </div>
                                        <!-- Product Info -->
                                        <div class="product-info mt-15 text-center">
                                            <a href="shop-details.html">
                                                <p><?php print_r($value['name']); ?></p>
                                            </a>
                                            <h6><?php print_r($value['price']); ?></h6>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>

                        </div>

                        <!-- Pagination -->
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include '../component/footer.php'; ?>
    <!-- ##### Footer Area End ##### -->

    <?php include '../component/js.php'; ?>
</body>

</html>