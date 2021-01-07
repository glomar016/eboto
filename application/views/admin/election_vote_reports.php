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
                        <!-- Election Data Table Content -->
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">
                                
                        
                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                        <h2>History of Election Votes</h2>
                                        <div class="dropdown">
                                            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Election
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="<?php echo base_url()?>admin/reports/view/election">Election</a>
                                                <a class="dropdown-item" href="<?php echo base_url()?>admin/reports/view/contest">Contest</a>
                                                <a class="dropdown-item" href="<?php echo base_url()?>admin/reports/view/poll">Poll</a>
                                            </div>
                                        </div>         
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="election_vote_table" class="table table-data3" style="width:100%"> 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Election Name</th>
                                                <th>Candidate Name</th>
                                                <th>Voter Name</th>
                                                <th>Voter Student Number</th>
                                                <th>Vote Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                                </div>  
                            </div>
                        </div>
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

</html>

<script>
$(document).ready(function() {

    // loadtable
    function load_election_votes(){
        electionDataTable = $('#election_vote_table').DataTable( {
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>admin/reports/get_election_votes",
            "columns": [
                { data: "electionName"},
                { data: "candidateName"},
                { data: "voterName"},
                { data: "userStudentNo"},
                { data: "voteDateCreated"},
            ],

        })
    }

    load_election_votes()
    // End of loadtable

});
</script>
<!-- end document-->
