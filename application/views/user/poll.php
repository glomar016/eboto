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
                    <div class="col-lg-12">
                        <!-- Data Table Content -->
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">

                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                        <h2>List of Poll</h2>
                                    <div class="table-data__tool-right">
                                        <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#pollModal">   
                                        <i style=padding:3px; class="fa fa-plus"></i> 
                                        Create Poll </button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="pollTable" class="table table-data3" stytle="width:100%"> 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
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
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- poll MODAL -->
    <div class="modal fade" id="pollModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:darkslateblue;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Create Poll</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="addpollForm">
                            <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-trophy"></i>
                                            <label for="pollName" class=" form-control-label">Poll Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="pollName" name="pollName" placeholder="Name of Poll" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-group"></i>
                                            <label for="pollRestriction" class=" form-control-label">Restriction</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <select name="pollRestriction" id="pollRestriction" class="form-control">
                                                <option value="0">Please select your Restriction</option>
                                                <option value="1">Option #1</option>
                                                <option value="2">Option #2</option>
                                                <option value="3">Option #3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="pollDescription" class=" form-control-label">Description </label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="pollDescription" id="pollDescription" rows="4" placeholder="Content" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="pollDateStart" class=" form-control-label">Date Start</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" id="pollDateStart" name="pollDateStart" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="pollDateEnd" class=" form-control-label">Date End</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" id="pollDateEnd" name="pollDateEnd" class="form-control">
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
    <!-- END poll MODAL -->
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

<!-- Data Tables -->



<!--  -->
<script>
$(document).ready(function() {

    

    function loadtable(){
         pollDataTable = $('#pollTable').DataTable( {
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>poll/show_poll",
            "columns": [
                { data: "id"},
                { data: "pollName"},
                { data: "pollDateStart", render: function(data, type, row){
                    return moment(data).format('LL');
                }},
                { data: "pollDateEnd", render: function(data, type, row){
                    return moment(data).format('LL');
                }},
                { data: "pollOrg"},
                { data: "pollStatus", render: function(data, type, row){
                    if(data == 1){
                        return '<div class="btn-group"><button id="pollView" name="'+row['id']+'" title="View" type="button" class="btn btn-primary btn-sm"><i class="zmdi zmdi-eye"></i> </button>'+
                                '<button id="pollEdit" type="button" class="btn btn-warning btn-sm" title="Edit"> <i class="zmdi zmdi-edit"> </i></button>'+
                                '<button type="button" class="btn btn-danger btn-sm btn_delete" value="'+row.id+'"   title="Delete"> <i class="zmdi zmdi-delete"> </i></button></div>';
                    }   
                    else{
                        return '<button>Activate</button>';
                    }
                }}
            ],

            
            "aoColumnDefs": [{"bVisible": false, "aTargets": [0]}],
            "order": [[0, "desc"]]
        })


            

    }

    function refresh(){
        var url = "<?php echo base_url()?>poll/show_poll";

        pollDataTable.ajax.url(url).load();
        
    }
    // delete function
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;
        
        $.ajax({
            url: '<?php echo base_url()?>poll/delete_poll',
            data: {id: id},

                success:function(data){
                    refresh();
                    Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully deleted a poll.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        })
                }
        });
    });

    // load the table
    loadtable();


    $('#addpollForm').on('submit', function(e){
                        e.preventDefault();

                        var form = $('#addpollForm');
                        // var pollDataTable = $('#pollTable').DataTable();

                        // ajax post
                        $.ajax({
                            url: '<?php echo base_url()?>poll/add_poll',
                            type: 'post',
                            data: form.serialize(),

                            success:function()
                                    {

                                    refresh();
                                    $('#pollModal').modal('hide');
                                    
                                    Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully created a poll.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        })

                                        
                                    }
                        });
                });

    
  
});


</script>


 <!-- Ajax form posting -->
<script>
        

</script>

</html>
<!-- end document-->
