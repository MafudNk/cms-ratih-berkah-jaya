<?php
$hero = [
    [
        'image' => 'img/bg-img/bg1.jpg',
        'title' => 'Premium Spice Harvests Await You!',
        'subtitle' => 'Immerse yourself in the essence of premium quality spices meticulously sourced from Indonesian farms. Ratih Berkah Jaya guarantees an exquisite array of flavors to elevate your culinary creations.'
    ],
    [
        'image' => 'img/bg-img/butterfly_pea.png',
        'title' => 'Global Spice Solutions, Seamless Export Experience!',
        'subtitle' => 'As your trusted spice export partner, Ratih Berkah Jaya ensures a seamless journey from our farms to your destination. Our commitment to excellence extends globally, promising you a supply chain you can rely on.'
    ]

];

include 'config/config.php'; 
?>
<section class="hero-area">
    <div class="hero-post-slides owl-carousel">

        <!-- Single Hero Post -->
        <?php
        foreach ($hero as $key => $value) { ?>

            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url( <?php print_r($value['image']); ?>);"></div>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Post Content -->
                            <div class="hero-slides-content text-center">
                                <h2><?php print_r($value['title']); ?></h2>
                                <p><?php print_r($value['subtitle']); ?></p>
                                <div class="welcome-btn-group">
                                    <a href=<?php echo "$product"; ?> class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href=<?php echo "$about"; ?> class="btn alazea-btn mr-30">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php }
        ?>


        <!-- Single Hero Post -->


    </div>
</section>