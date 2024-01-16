<!DOCTYPE html>
<html lang="en">

<?php 

include 'component/head.php'; ?>
<link rel="stylesheet" href="style2.css" type="text/css">
<style>
    .modal-content {
        background-image: url('img/bg-img/popup.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
    }
</style>

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
   
    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false"> -->
    <div class="modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <form class="" action="send.php" method="post">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label" style="color: black !important;">Email:</label>
                                <input type="email" name="email" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label" style="color: black !important;">Message:</label>
                                <textarea class="form-control" name="message" id="message-text"></textarea>
                            </div>
                            <button type="submit" name="send" class="btn alazea-btn mr-30">Send message</button>    
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->


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