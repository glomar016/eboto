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
                    <!-- Card Header -->
                    <div class="card-body" style="background-color: #ffffff;">
                        <div class="au-card m-b-30">
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
                            <div class="au-card-inner text-center optionList">
                                <h2><?php echo $data[0]->pollName?></h2>
                            </div>
                    </div>
                    <!-- End of Card Header -->
                    <!-- Data Table Content -->
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                        <h2>List of option</h2>
                                    <div class="table-data__tool-right">
                                        <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#optionModal">   
                                        <i style=padding:3px; class="fa fa-plus"></i> 
                                        Add option </button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="optionTable" class="table table-data3" style="width:100%"> 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
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
                        <!-- Vote Logs -->
                                
                        <div class="au-card m-b-30">
                                    <div class="au-card-inner">
                                            <div class="table-data__tool">
                                                <h2>Vote Logs</h2>
                                            </div>
                                            <div class="table-responsive table-responsive-data2">
                                                <table id="poll_votes_table" class="table table-data3" style="width:100%"> 
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>Hidden ID</th>
                                                            <th>Option Name</th>
                                                            <th>Voter Name</th>
                                                            <th>Voter Student Number</th>
                                                            <th>Voter Course</th>
                                                            <th>Vote Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                                <!-- End of Vote Logs -->
                    </diV>
                    <!-- End of Data Table Content -->
                </div>
            </div>
        </div>
    </div> 

    <!-- option MODAL -->
    <div class="modal fade" id="optionModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:maroon;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Add option</h3>
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
                                            <label for="optionName" class=" form-control-label"> Name <small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" value="<?php echo $data[0]->id?>" hidden>
                                            <input type="text" id="optionName" name="optionName" placeholder="Name" class="form-control" maxlength="100">
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input type="submit" name="upload" id="upload" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END option MODAL -->

    <!-- edit option MODAL -->
    <div class="modal fade" id="editoptionModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:maroon;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Update Option</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="editoptionForm" name="editoptionForm">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-user"></i>
                                            <label for="editoptionName" class=" form-control-label"> Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" value="<?php echo $data[0]->id?>" hidden>
                                            <input type="text" id="editoptionName" name="editoptionName" placeholder="Name" class="form-control" maxlength="100">
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input type="submit" name="editupload" id="editupload" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END option MODAL -->

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

<script>
$(document).ready(function(){
    // Show poll details
    var pollID = "<?php echo $data[0]->id ?>"

    function loadviewdata(){

        var pollName = "<?php echo $data[0]->pollName ?>"
        var pollDateStart = "<?php echo $data[0]->pollDateStart ?>"
        var pollDateEnd = "<?php echo $data[0]->pollDateEnd ?>"
        var pollDescription = `<?php echo $data[0]->pollDescription ?>`
        

            const clock = document.getElementById('liveclock');
            setInterval(() => {
                // clock.textContent 
                clock.textContent = moment(pollDateEnd).endOf('seconds').fromNow();
            }, 1000);

                $( ".optionList" ).append("<p style='white-space: pre-wrap;'>Description: "+pollDescription+"</p>");
                $( ".optionList" ).append("<p>Date Start: "+(moment(pollDateStart).format('LL'))+"</p>");
                $( ".optionList" ).append("<p>Date End: "+(moment(pollDateEnd).format('LL'))+"</p>");
    }
    // End of show poll details

    function loadtable(){
        optionDataTable = $('#optionTable').DataTable({
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>admin/option/show_option/"+pollID,
            "columns": [
                { data: "id"},
                { data: "optionName"},
                { data: "optionStatus", render: function(data, type, row){
                    if(data == 1){
                        return '<div class="btn-group">'+
                                '<button class="btn btn-primary btn-sm btn_view" value="'+row.id+'" title="View" type="button" ><i class="zmdi zmdi-eye"></i> </button>'+
                                '<button class="btn btn-warning btn-sm btn_edit" value="'+row.id+'" title="Edit" type="button" ><i class="zmdi zmdi-edit"></i> </button>'+
                                '<button class="btn btn-danger btn-sm btn_delete" value="'+row.id+'" title="Delete" type="button"> <i class="zmdi zmdi-delete"> </i></button></div>';
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

    // To auto load the datatables
    function refresh(){
        var url = "<?php echo base_url()?>admin/option/show_option/"+pollID;

        optionDataTable.ajax.url(url).load();
    }

    loadtable();
    loadviewdata();

    // load data and pass to edit function
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>admin/option/get_option/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    $('[name="id"').val(row.id);
                    $('[name="editoptionName"]').val(row.optionName);
                    
                    $('#editoptionModal').modal('show'); // show bootstrap modal when complete loaded
                }
        })
       
    });

    // delete function
        $(document).on("click", ".btn_delete", function(){
        var id = this.value;

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                
                $.ajax({
                    url: '<?php echo base_url()?>admin/option/delete_option',
                    data: {id: id},

                        success:function(data){
                            refresh();
                            Swal.fire(
                                'Deleted!',
                                'The option has been deleted.',
                                'success'
                                )
                        }
                });

            }
        })
        
    });
    
    // Create option
    $('#addoptionForm').on('submit', function(e){
            e.preventDefault();
            $("#upload").attr("disabled", true);

        var optionName = document.addoptionForm.optionName.value;

        if(optionName == ''){
                        Swal.fire({
                                title: 'Warning!',
                                text: 'Please fill out required field.',
                                icon: 'warning',
                                confirmButtonText: 'Ok'
                                })
                                $("#upload").attr("disabled", false);
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
                                refresh();

                                Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully created a option.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        })
                                        $("#upload").attr("disabled", false);
                                        $('#optionModal').modal('hide');
                                        $('#optionModal form')[0].reset();
                                    }
                        })
                    // End of Ajax Call
                }
            })
        });

    // End of Create option

    // View option
    $(document).on("click", ".btn_view", function(){
        var id = this.value;

        window.location.href = "<?php echo base_url()?>admin/option/view_option/"+id;

    });
    // End of view option

    // Update option
    $('#editoptionForm').on('submit', function(e){
                        e.preventDefault();
                        var id = this.value;

        function refresh(){
        var pollID = "<?php echo $data[0]->id ?>"
        var url = "<?php echo base_url()?>admin/option/show_option/"+pollID;

        optionDataTable.ajax.url(url).load();
    }

        var editoptionName = document.editoptionForm.editoptionName.value;

            if(editoptionName == ''){
                                Swal.fire({
                                        title: 'Warning!',
                                        text: 'Please fill out required field.',
                                        icon: 'warning',
                                        confirmButtonText: 'Ok'
                                        })
            }
            else
            {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You are updating an option!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, update it!'
                            }).then((result) => {
                            if (result.isConfirmed) {                         
                                // ajax post
                                            $.ajax({
                                                url: '<?php echo base_url()?>admin/option/update_option',
                                                type:"post",
                                                data: new FormData(this),
                                                processData:false,
                                                contentType:false,

                                                success:function()
                                                        {
                                                        
                                                        refresh();
                                                    
                                                        Swal.fire({
                                                            title: 'Success!',
                                                            text: 'You successfully updated an option.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Ok'
                                                            })
                                                        
                                                        $('#editoptionModal').modal('hide');
                                                        $('#editoptionModal form')[0].reset();
                                                            
                                                        }
                                            });
                                    // end of ajax posting
                                    }       
                                })
                            }
            });
    // End of updating option

    // Load vote logs table
    function load_poll_votes(){
        var pollID = "<?php echo $data[0]->id ?>"
        
        electionDataTable = $('#poll_votes_table').DataTable( {
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>admin/reports/get_specific_votes/"+pollID+"/t_poll",
            "columns": [
                { data: "id"},
                { data: "optionName"},
                { data: "voterName"},
                { data: "userStudentNo"},
                { data: "userCourse"},
                { data: "voteDateCreated"},
            ],
            
            "aoColumnDefs": [{"bVisible": false, "aTargets": [0]}],
            "order": [[0, "desc"]]

        })
    }

    load_poll_votes()
    // End of load votes table
</script>

</html>
<!-- end document-->
