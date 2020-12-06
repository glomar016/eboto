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
        <?php $this->load->view('includes/sidebar.php'); ?>
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
                    <!-- Card Header -->
                    <div class="col-lg-12">
                        <div class="card" style = float:center;>
                            <div class="card-header" style="background-color: #ffffff;">
                                <h1 class="h2 text-left" style="color:black;"><?php echo $data[0]->electionName?></h1>
                            </div>
                            <div class="card-body" style="background-color: #ffffff;">
                                <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addCandidate">   
                                <i style=padding:3px; class="fa fa-plus"></i> 
                                Add Candidate </button>
                                <img src =https://sis2.pup.edu.ph/student/assets/images/PUPLogo.png style=padding-left:50px;>
                                <br>
                                <br>
                            <div class="card border-info mb-3" style="max-width: 17rem;">
                            <div class="card-header text-center">Information of <?php echo $data[0]->electionName?></div>
                            <div class="card-body text-info">
                                <h5 class="candidateList"></h5>
                            </div>
                            </div>
                                    <div class="d-flex justify-content-left">
                                        <div class="col-lg-3" style="background-color: #800000;">
                                            <div style="color:white;" class="text-center">
                                            <i style=padding:3px;color:yellow; class="fa fa-clock-o"></i> 
                                            Voting Ends:
                                            <span class="badge badge-pill badge-warning" id="liveclock">
                                            </span>
                                            
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                                           <!-- Data Table Content -->
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">

                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                        <h2>List of Election</h2>
                                    <div class="table-data__tool-right">
                                        <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#electionModal">   
                                        <i style=padding:3px; class="fa fa-plus"></i> 
                                        Create Election </button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="electionTable" class="table table-data3" style="width:50%"> 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Date Start</th>
                                                <th>Date End</th>
                                                <th>Restriction</th>
                                                <th>Action</th>
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
                        <!-- End of Data Table Content -->
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- candidate MODAL -->
    <div class="modal fade" id="addCandidate" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:maroon;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Add Candidate</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="addcandidateForm">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-user"></i>
                                            <label for="candidateFirstName" class=" form-control-label">First Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="candidateFirstName" name="candidateFirstName" placeholder="Your First Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-user"></i>
                                            <label for="candidateMiddleName" class=" form-control-label">Middle Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="candidateMiddleName" name="candidateMiddleName" placeholder="Your Middle Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-user"></i>
                                            <label for="candidateLastName" class=" form-control-label">Last Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="candidateLastName" name="candidateLastName" placeholder="Your Last Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-address-card"></i>
                                            <label for="candidatePosition" class=" form-control-label">Position</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="candidatePosition" name="candidatePosition" placeholder="Your Position" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-group"></i>
                                            <label for="candidateCourse" class=" form-control-label">Restriction</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <select name="candidateCourse" id="candidateCourse" class="form-control">
                                                <option value="0">Please select your Restriction</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="candidateBirthday" class=" form-control-label">Birthday</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" id="candidateBirthday" name="candidateBirthday" class="form-control">
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input style=background-color:#28a745; type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END candidate MODAL -->

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

<script>
$(document).ready(function(){

    var electionName = "<?php echo $data[0]->electionName ?>"
    var electionDateStart = "<?php echo $data[0]->electionDateStart ?>"
    var electionDateEnd = "<?php echo $data[0]->electionDateEnd ?>"
    var electionDescription = "<?php echo $data[0]->electionDescription ?>"


    const clock = document.getElementById('liveclock');
    // $( ".candidateList" ).append("<p>"+electionName+"</p>");
    setInterval(() => {
        // clock.textContent 
        clock.textContent = moment(electionDateEnd).endOf('seconds').fromNow();
    }, 1000);

        // $( ".candidateList" ).append("<p class='text-center'>Voting Ends: "+(moment(electionDateEnd).endOf('hour').fromNow()) +"</p>");
        $( ".candidateList" ).append("<p class='text-center'>Description: "+electionDescription+"</p>");
        $( ".candidateList" ).append("<p class='text-center'>Date Start: "+(moment(electionDateStart).format('LL'))+"</p>");
        $( ".candidateList" ).append("<p class='text-center'>Date End: "+(moment(electionDateEnd).format('LL'))+"</p>");

});

</script>

</html>
<!-- end document-->
