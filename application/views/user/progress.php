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

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url()?>resources/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()?>resources/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url()?>resources/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url()?>resources/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    
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

    <!-- Checkbox css -->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/checkbox.css" type="text/css">
    


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- HEADER DESKTOP-->
    <?php $this->load->view('includes/userheader.php'); ?>
    <!-- HEADER DESKTOP-->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="<?php echo base_url()?>resources/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Tally</h2>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url()?>home">Home</a>
                            <a href="<?php echo base_url()?>user/vote">Vote</a>
                            <span>Tally</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- MAIN CONTENT -->

    <!-- Candidate Live Tally -->
    <?php if($tableName == 't_candidate'){ ?>
        <div class="card col-lg-12 col-md-6 col-sm-6 d-flex justify-content-center align-self-stretch">
            <div class="card-header">
                <h4>Voting Live Tally</h4>
            </div>
            <?php foreach($data as $row) { ?>
                <div class="card-body">
                    <h6><?php echo $row->candidateName; ?></h6>
                    <div class="progress mb-2">
                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $row->vote_percentage; ?>%" aria-valuenow="<?php echo $row->vote_counts; ?>"
                                aria-valuemin="0"><?php echo $row->vote_counts; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
    <!-- End of Candidate Live Tally -->

    <!-- Contestant Live Tally -->
    <?php if($tableName == 't_contestant'){ ?>
        <div class="card col-lg-12 col-md-6 col-sm-6 d-flex justify-content-center align-self-stretch">
            <div class="card-header">
                <h4>Voting Live Tally</h4>
            </div>
            <?php foreach($data as $row) { ?>
                <div class="card-body">
                    <h6><?php echo $row->contestantName; ?></h6>
                    <div class="progress mb-2">
                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $row->vote_percentage; ?>%" aria-valuenow="<?php echo $row->vote_counts; ?>"
                                aria-valuemin="0"><?php echo $row->vote_counts; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
    <!-- End of Contestant Live Tally -->

    <!-- Option Live Tally -->
    <?php if($tableName == 't_option'){ ?>
        <div class="card col-lg-12 col-md-6 col-sm-6 d-flex justify-content-center align-self-stretch">
            <div class="card-header">
                <h4>Voting Live Tally</h4>
            </div>
            <?php foreach($data as $row) { ?>
                <div class="card-body">
                    <h6><?php echo $row->optionName; ?></h6>
                    <div class="progress mb-2">
                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo $row->vote_percentage; ?>%" aria-valuenow="<?php echo $row->vote_counts; ?>"
                                aria-valuemin="0"><?php echo $row->vote_counts; ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
    <!-- End of Option Live Tally -->

    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER DESKTOP-->
    <?php $this->load->view('includes/userfooter.php'); ?>
    <!-- FOOTER DESKTOP-->
    

    <!-- Js Plugins -->
    <!-- <script src="<?php echo base_url()?>resources/js/jquery-3.3.1.min.js"></script> -->
    <script src="<?php echo base_url()?>resources/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/mixitup.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url()?>resources/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/user-main.js"></script>

    <!-- Jquery JS-->
    <!-- <script src="<?php echo base_url()?>resources/vendor/jquery-3.2.1.min.js"></script> -->
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url()?>resources/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url()?>resources/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url()?>resources/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url()?>resources/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url()?>resources/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url()?>resources/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url()?>resources/js/main.js"></script>
</body>

<script>
// Start of script
$(document).ready(function(){

})

</script>

</html>