<!DOCTYPE html>
<html lang="en">

<?php include '../component/head.php'; 
include __DIR__ . '/../config/config.php'; 
?>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="../img/core-img/logo.jpg" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include '../component/nav.php'; ?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->

        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(http://localhost/cms-ratih-berkah-jaya/img/bg-img/bg1.jpg);">

            <h2>Product</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=<?php echo "$app_url"; ?>><i class="fa fa-home"></i> Home</a></li>
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

                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/chilli_jamu.png',

                    'tag' => '<div class="product-tag"> <a href="#">Hot</a> </div>',
                    'name' => 'Chilli Jamu',
                    'price' => '$10.99'
                ],
                [


                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/cardamom.png',
                    'tag' => '',
                    'name' => 'Cardamom',
                    'price' => '$10.99'
                ],
                [

                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/mung_bean.png',
                    'tag' => '',
                    'name' => 'Mung Beans',
                    'price' => '$10.99'
                ],
                [

                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/abc_nutmeg.png',
                    'tag' => '',
                    'name' => 'ABC Nutmeg',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/dry_laos.png',
                    'tag' => '',
                    'name' => 'Dry Laos',
                    'price' => '$10.99'
                ],
                [

                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/dry_turmeric.png',
                    'tag' => '',
                    'name' => 'Dry Turmeric',
                    'price' => '$10.99'
                ],
                [

                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/clove.png',
                    'tag' => '',
                    'name' => 'Clove',
                    'price' => '$10.99'
                ],
                [

                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/kemukus.png',
                    'tag' => '',
                    'name' => 'Cubeb',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/dry_ginger.png',
                    'tag' => '',
                    'name' => 'Dry Ginger',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/white_pepper.png',
                    'tag' => '',
                    'name' => 'White Pepper',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/abc_long_nutmeg.png',
                    'tag' => '',
                    'name' => 'ABC Long Nutmeg',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/fak_fak.png',
                    'tag' => '',
                    'name' => 'Fak - Fak Long Nutmeg Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/butterfly_pea2.png',
                    'tag' => '',
                    'name' => 'Butterfly Pea',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/fak_fak_long.png',
                    'tag' => '',
                    'name' => 'Fak - Fak Long Nutmeg',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/places_seed.png',
                    'tag' => '',
                    'name' => 'Places Seeds',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/round_nutmeg_flower.png',
                    'tag' => '',
                    'name' => 'Round Nutmeg Flower',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/cinnamon.png',
                    'tag' => '',
                    'name' => 'Cinnamon',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/dry_vanilla.png',
                    'tag' => '',
                    'name' => 'Dry Vanilla',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/dry_butterfly.png',
                    'tag' => '',
                    'name' => 'Dry Butterfly Pea',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/saga_seeds.png',
                    'tag' => '',
                    'name' => 'Saga Seeds',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/betel_nut.png',
                    'tag' => '',
                    'name' => 'Betel Nut',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/black_pepper.png',
                    'tag' => '',
                    'name' => 'Black Pepper',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/nutmeg_round.png',
                    'tag' => '',
                    'name' => 'Nutmeg Round Skin',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/banna_leaf.png',
                    'tag' => '',
                    'name' => 'Banana Leaf',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/broom_stick.png',
                    'tag' => '',
                    'name' => 'Broom Stick',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/cashew_crew.png',
                    'tag' => '',
                    'name' => 'Cashew Crew',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/stinky_bean.png',
                    'tag' => '',
                    'name' => 'Stinky Bean',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/elephant_ginger.png',
                    'tag' => '',
                    'name' => 'Elephant Ginger',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/laos_lives.png',
                    'tag' => '',
                    'name' => 'Laos Lives',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/red_ginger.png',
                    'tag' => '',
                    'name' => 'Red Ginger',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/emprit_ginger.png',
                    'tag' => '',
                    'name' => 'Emprit Ginger',
                    'price' => '$10.99'
                ],
                [
                    'image' => 'http://localhost/cms-ratih-berkah-jaya/img/bg-img/peanuts.png',
                    'tag' => '',
                    'name' => 'Peanuts',
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
                                            <a href="shop-details.php"><img src=<?php print_r($value['image']); ?> alt=""></a>
                                            <!-- Product Tag -->
                                            <?php print_r($value['tag']); ?>

                                        </div>
                                        <!-- Product Info -->
                                        <div class="product-info mt-15 text-center">
                                            <a href="shop-details.php">
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