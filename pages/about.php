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
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(<?php echo "$app_url"; ?>img/bg-img/bg1.jpg);">
            <h2>ABOUT US</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href=<?php echo "$app_url"; ?>><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>ABOUT US</h2>
                        <p>To be a global leader in the export of premium spices, recognized for authenticity, quality, and sustainable practices.</p>
                    </div>
                    <p>At Ratih Berkah Jaya, we take pride in being a distinguished player in the agricultural produce trading sector, specializing in the export of high-quality spices. Our journey is rooted in a commitment to providing not just products but experiences that resonate with our customers.</p>

                    <!-- Progress Bar Content Area -->
                    <div class="alazea-progress-bar mb-50">
                        <!-- Single Progress Bar ganti warna fill di active.js -->
                        <div class="single_progress_bar">
                            <p>Abc Nutmeg</p>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Chili Jamu</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p>Cardanom</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?php echo "$app_url"; ?>img/core-img/potted-plant.png" alt="">
                                    <h5>Concept</h5>
                                    <p>We place great emphasis on flexibility, service and cooperation. Together we find
                                        the most suitable form of sale for you and your houseplants.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?php echo "$app_url"; ?>img/core-img/plant.png" alt="">
                                    <h5>Prepare</h5>
                                    <p>We have prepared all things related to ornamental plants that suit your needs.
                                    </p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?php echo "$app_url"; ?>img/core-img/medicine.png" alt="">
                                    <h5>Retouch</h5>
                                    <p>Before your ornamental plants get to your home or office, we will always confirm
                                        the desired changes to you.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="<?php echo "$app_url"; ?>img/core-img/growing.png" alt="">
                                    <h5>Finalize</h5>
                                    <p>We will finalize and make sure again regarding your Ornamental Plants there are
                                        no changes and according to your needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <!-- ##### Service Area Start ##### -->
    <section class="our-services-area bg-gray section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR SERVICES</h2>
                        <p>We provide the perfect service for you.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-5">
                <div class="alazea-service-area mb-100">

                    <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <!-- Icon -->
                        <div class="service-icon mr-30">
                            <img src="<?php echo "$app_url"; ?>img/core-img/world.png" alt="">
                        </div>
                        <!-- Content -->
                        <div class="service-content">
                            <h5>International Quality Standards</h5>
                            <p>.</p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                        <!-- Icon -->
                        <div class="service-icon mr-30">
                            <img src="<?php echo "$app_url"; ?>img/core-img/reputation.png" alt="">
                        </div>
                        <!-- Content -->
                        <div class="service-content">
                            <h5>Customized Export Solutions</h5>
                            <p>.</p>
                        </div>
                    </div>

                    <!-- Single Service Area -->
                    <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="500ms">
                        <!-- Icon -->
                        <div class="service-icon mr-30">
                            <img src="<?php echo "$app_url"; ?>img/core-img/best-price.png" alt="">
                        </div>
                        <!-- Content -->
                        <div class="service-content">
                            <h5>Competitive Pricing</h5>
                            <p>.</p>
                        </div>
                    </div>

                </div>
            </div>

                <div class="col-12 col-lg-6">
                    <a class="nav-brand"><img src="<?php echo "$app_url"; ?>img/core-img/logo-removebg-preview.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Service Area End ##### -->



    <!-- ##### Team Area Start ##### -->
    <section class="team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR TEAM</h2>
                        <p>A team of dedicated experienced professionals.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/team1.png" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Joseph Corbin</h5>
                            <p>CEO &amp; Founder</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/team2.png" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Tasha Deserio</h5>
                            <p>Garden Designer</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/team3.png" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Cody Baker</h5>
                            <p>Plan Manager</p>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member text-center mb-100">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="<?php echo "$app_url"; ?>img/bg-img/team4.png" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info mt-30">
                            <h5>Pearl Kansas</h5>
                            <p>Marketer</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Team Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    
    <?php include '../component/footer.php'; ?>
    <!-- ##### Footer Area End ##### -->

    <?php include '../component/js.php'; ?>
</body>

</html>