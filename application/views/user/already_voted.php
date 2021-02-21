<?php

    if (isset($this->session->userdata['logged_in'])) {
            $userStudentNo = ($this->session->userdata['logged_in']['userStudentNo']);
            $userId = ($this->session->userdata['logged_in']['userId']);
        } 
        else {
            header("location: ".base_url()."user/login");
    }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUP | E-Boto</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/style.css" type="text/css">

    <!-- Data Tables CSS-->
    <link href="<?php echo base_url()?>resources/css/jquery.dataTables.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url()?>resources/css/theme.css" rel="stylesheet" media="all">

    <!-- Jquery-->
    <script src="<?php echo base_url()?>resources/js/jquery-3.5.1.min.js"></script>
    
    <!-- Data Tables JS-->
    <script src="<?php echo base_url()?>resources/js/jquery.dataTables.min.js"></script>

    <!-- Data Time JS-->
    <script src="<?php echo base_url()?>resources/js/datetime.js"></script>

    <!-- Moment w locales JS-->
    <script src="<?php echo base_url()?>resources/js/moment.js"></script>

    <!-- Sweet Alert -->
    <script src="<?php echo base_url()?>resources/js/sweetalert2@10.js"></script>


</head>

<body style="background-color:#00295e">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- HEADER DESKTOP-->
    <?php $this->load->view('includes/userheader.php'); ?>
    <!-- HEADER DESKTOP-->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" style="padding-bottom:50px" data-setbg="<?php echo base_url()?>resources/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vote</h2>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url()?>home">Home</a>
                            <a href="<?php echo base_url()?>user/vote">List</a>
                            <span>Vote</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <h1 class="text-center" style="color:white"> You already voted </h1>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!-- Portfolio Section End -->
   

    <!-- FOOTER DESKTOP-->
    <?php $this->load->view('includes/userfooter.php'); ?>
    <!-- FOOTER DESKTOP-->
    

    <!-- Js Plugins -->
    <script src="<?php echo base_url()?>resources/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/mixitup.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url()?>resources/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/user-main.js"></script>
</body>

</html>