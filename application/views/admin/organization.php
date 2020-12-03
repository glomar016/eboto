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
                        <!-- CONTENT HEADER -->
                        <div class="card" style=height:800px>
                                    <div class="card-header" style =background-color:maroon>
                                        <h3 style ="color:white;"> Organization </h3>
                                    </div>
                                    <div class="card-body">
                                        <button  type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#organization">   
                                        <i style=padding:3px; class="fa fa-plus"></i> 
                                        Create Organization </button>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="has-success form-group">
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- ORGANIZATION MODAL -->

    <div class="modal fade" id="organization" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:maroon;>
							<h5 class="modal-title" id="largeModalLabel" style=color:white;>Create Organization</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>

                        <div class="card">

                                <div class="card-body card-block">
                                    <form action="" method="post" class="">
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                    <i style =padding-right:16px; class="fa fa-users"></i>
                                                    <label for="orgName" class=" form-control-label">Organization Name</label>
                                                </div>
                                                <div class="col-4 col-md-7">
                                                    <input type="text" id="orgName" name="orgName" placeholder="Name of Organization" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                <i style =padding-right:16px; class="fa fa-comment"></i>
                                                    <label for="orgDescription" class=" form-control-label">Description </label>
                                                </div>
                                                <div class="col-4 col-md-7">
                                                    <textarea name="orgDescription" id="orgDescription" rows="4" placeholder="Content" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                <i style =padding-right:16px; class="fa fa-file-image-o"></i>
                                                    <label for="orgImg" class=" form-control-label">Organization Image</label>
                                                </div>
                                                <div class="col-4 col-md-7">
                                                    <input type="file" id="orgImg" name="orgImg" class="form-control-file">
                                                </div>
                                            </div>
                                            <div style = float:right;>
                                                <button style=background-color:#28a745; type="button" class="btn btn-primary">Confirm</button>
                                            </div>


                                    </form>
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
