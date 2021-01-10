<?php 

    if (isset($this->session->userdata['logged_in'])) {
        $userType = ($this->session->userdata['logged_in']['userType']);
        $userId = ($this->session->userdata['logged_in']['userId']);

            if($userType == 1){
                header("location: ".base_url()."user/forbidden");
            }

    } 
    else {
        header("location: ".base_url()."user/login");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

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

</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php $this->load->view('includes/header_mobile.php'); ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php $this->load->view('includes/adminsidebar.php'); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view('includes/header_desktop.php'); ?>
            <!-- HEADER DESKTOP-->
        <!-- MAIN CONTENT-->
    <div class='main-content'>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- STATISTIC-->
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dashboard</h2>
                                </div>
                            </div>
                                <div class="row m-t-25">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="overview-item overview-item--c1">
                                            <div class="overview__inner">
                                                <div class="overview-box clearfix">
                                                    <div class="text">
                                                        <h2><?php echo $user_count[0]->user_count; ?></h2>
                                                        <span>Active Users</span>
                                                        
                                                        <h2><?php echo $org_count[0]->org_count; ?></h2>
                                                        <span>Total Restriction</span>
                                                    </div>
                                                </div>
                                                <div class="overview-chart">
                                                    <canvas id="widgetChart1"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="overview-item overview-item--c2">
                                            <div class="overview__inner">
                                                <div class="overview-box clearfix">
                                                    <div class="text">
                                                        <h2><?php echo $election_count[0]->election_count; ?></h2>
                                                        <span>Total Election</span>
                                                        <h2><?php echo $active_election_count[0]->active_election_count; ?></h2>
                                                        <span>Active</span>
                                                        <h2><?php echo $candidate_count[0]->candidate_count; ?></h2>
                                                        <span>Total Candidate</span>
                                                    </div>
                                                </div>
                                                <div class="overview-chart">
                                                    <canvas id="widgetChart2"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="overview-item overview-item--c3">
                                            <div class="overview__inner">
                                                <div class="overview-box clearfix">
                                                    <div class="text">
                                                        <h2><?php echo $contest_count[0]->contest_count; ?></h2>
                                                        <span>Total Contest</span>
                                                        <h2><?php echo $active_contest_count[0]->active_contest_count; ?></h2>
                                                        <span>Active</span>
                                                        <h2><?php echo $contestant_count[0]->contestant_count; ?></h2>
                                                        <span>Total Contestant</span>
                                                    </div>
                                                </div>
                                                <div class="overview-chart">
                                                    <canvas id="widgetChart3"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="overview-item overview-item--c4">
                                            <div class="overview__inner">
                                                <div class="overview-box clearfix">
                                                    <div class="text">
                                                        <h2><?php echo $poll_count[0]->poll_count; ?></h2>
                                                        <span>Total Poll</span>
                                                        <h2><?php echo $active_poll_count[0]->active_poll_count; ?></h2>
                                                        <span>Active</span>
                                                        <h2><?php echo $option_count[0]->option_count; ?></h2>
                                                        <span>Total Option</span>
                                                    </div>
                                                </div>
                                                <div class="overview-chart">
                                                    <canvas id="widgetChart4"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                        <!-- END STATISTIC-->
                        
                        <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- RECENT REPORT-->
                                        <div class="recent-report3 m-b-40">
                                            <div class="title-wrap">
                                                <h3 class="title-3">Votes Count Reports</h3>
                                                <div class="chart-info-wrap">
                                                    <div class="chart-note">
                                                        <span class="dot dot--blue"></span>
                                                        <span>Election</span>
                                                    </div>
                                                    <div class="chart-note">
                                                        <span class="dot dot--green"></span>
                                                        <span>Contest</span>
                                                    </div>
                                                    <div class="chart-note">
                                                        <span class="dot dot--red"></span>
                                                        <span>Poll</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chart-wrap">
                                                <canvas id="recent-rep3-chart"></canvas>
                                            </div>
                                        </div>
                                        <!-- END RECENT REPORT-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!-- CHART PERCENT-->
                                        <div class="chart-percent-3 m-b-40">
                                            <h3 class="title-3 m-b-25">Chart %</h3>
                                            <div class="chart-note m-b-5">
                                                <span class="dot dot--blue"></span>
                                                <span>Election Made</span>
                                            </div>
                                            <div class="chart-note m-b-5">
                                                <span class="dot dot--green"></span>
                                                <span>Contest Made</span>
                                            </div>
                                            <div class="chart-note">
                                                <span class="dot dot--red"></span>
                                                <span>Poll Made</span>
                                            </div>
                                            <div class="chart-wrap m-t-60">
                                                <canvas id="percent-chart2"></canvas>
                                            </div>
                                        </div>
                                        <!-- END CHART PERCENT-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of div container -->

                    </div>
                </div>
            </div>
        </div>
    </div> 

        <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url()?>resources/vendor/jquery-3.2.1.min.js"></script>
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

</html>
<!-- end document-->
