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
                         <!-- Card Header -->
                    <div class="col-lg-12">
                        <div class="card" style = float:center;>
                            <div class="card-body" style="background-color: #ffffff;">
                                    <div class="d-flex justify-content-left">
                                        <div class="col-lg-3">
                                            <div style="color:black;">
                                                <i style=padding:3px;color:black; class="fa fa-clock-o"></i> 
                                                Voting Ends:
                                                <span class="badge badge-pill badge-warning" id="liveclock">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                            <!-- <p style="text-align:center;"><img src =https://sis2.pup.edu.ph/student/assets/images/PUPLogo.png></p> -->
                                            <br>
                                            <br>
                                            <div class="au-card m-b-30">
                                                <div class="au-card-inner optionList">
                                                    <h2><?php echo $data[0]->pollName?></h2>
                                                    <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#optionModal">   
                                                    <i style=padding:3px; class="fa fa-plus"></i> 
                                                    Add option </button>
                                                </div>
                                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
     <!-- option MODAL -->
     <div class="modal fade" id="optionModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:maroon;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Add Poll Option</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="addoptionForm" name="addoptionForm">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-user"></i>
                                            <label for="optionName" class=" form-control-label">Option</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" value="<?php echo $data[0]->id?>" hidden>
                                            <input type="text" id="optionName" name="optionName" placeholder="Option" class="form-control">
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
    <!-- END polloption MODAL -->

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

    function loadviewdata(){

    var pollName = "<?php echo $data[0]->pollName ?>"
    var pollDateStart = "<?php echo $data[0]->pollDateStart ?>"
    var pollDateEnd = "<?php echo $data[0]->pollDateEnd ?>"
    var pollDescription = "<?php echo $data[0]->pollDescription ?>"

        const clock = document.getElementById('liveclock');
        $( ".optionList" ).append("<p>"+pollName+"</p>");
        setInterval(() => {
            // clock.textContent 
            clock.textContent = moment(pollDateEnd).endOf('seconds').fromNow();
        }, 1000);

            $( ".optionList" ).append("<p>Description: "+pollDescription+"</p>");
            $( ".optionList" ).append("<p>Date Start: "+(moment(pollDateStart).format('LL'))+"</p>");
            $( ".optionList" ).append("<p>Date End: "+(moment(pollDateEnd).format('LL'))+"</p>");
    }
    // End of show poll details

    loadviewdata()

    // Create option
    $('#addoptionForm').on('submit', function(e){
        e.preventDefault();

        var optionName = document.addoptionForm.optionName.value;

        if(optionName == ''){
                        Swal.fire({
                                title: 'Warning!',
                                text: 'Please fill out required field.',
                                icon: 'warning',
                                confirmButtonText: 'Ok'
                                })
        }
        else{
                    // Ajax call
                    $.ajax({
                            url: '<?php echo base_url()?>admin/option/add_option',
                            type:"post",
                            data: new FormData(this),
                            processData:false,
                            contentType:false,

                            success: function(data){
                                Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully created a option.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        })
                                    
                                        $('#pollModal').modal('hide');
                                        $('#pollModal form')[0].reset();
                                    }
                        })
                    // End of Ajax Call
        }



    });

    // End of Create option

});
</script>

</html>
<!-- end document-->
