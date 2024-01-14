<?php
$hero = [
    [
        'image' => 'img/bg-img/bg1.jpg',
        'title' => 'Plants exist in the weather and light rays that surround them',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque ante nec ipsum iaculis, ac iaculis ipsum porttitor. Vivamus cursus nisl lectus, id mattis nisl lobortis eu. Duis diam augue, dapibus ut dolor at, mattis maximus dolor.'
    ],
    [
        'image' => 'img/bg-img/bg2.jpg',
        'title' => 'Plants',
        'subtitle' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque ante nec ipsum iaculis, ac iaculis ipsum porttitor. Vivamus cursus nisl lectus, id mattis nisl lobortis eu. Duis diam augue, dapibus ut dolor at, mattis maximus dolor.'
    ]

];
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
                                    <a href="#" class="btn alazea-btn mr-30">GET STARTED</a>
                                    <a href="#" class="btn alazea-btn active">CONTACT US</a>
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