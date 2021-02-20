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
                                </div>
                            </div>
                            <div class="au-card-inner text-center ep_candidateList">
                                <h2><?php echo $data[0]->partylistName?></h2>
                            </div>
                    </div>
                    <!-- End of Card Header -->
                    <!-- Data Table Content -->
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                        <h2>List of Candidate</h2>
                                    <div class="table-data__tool-right">
                                        <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#ep_candidateModal">   
                                        <i style=padding:3px; class="fa fa-plus"></i> 
                                        Add Candidate </button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="ep_candidateTable" class="table table-data3" style="width:100%"> 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Id</th>
                                                <th>Candidate Image</th>
                                                <th>Candidate Name</th>
                                                <th>Candidate Position</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                                </div>  
                        </div>
                                <!-- END DATA TABLE -->
                            
                    </diV>
                    <!-- End of Data Table Content -->
                </div>
            </div>
        </div>
    </div> 

    <!-- ep_candidate MODAL -->
    <div class="modal fade" id="ep_candidateModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:maroon;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Add ep_candidate</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="addep_candidateForm" name="addep_candidateForm">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-user"></i>
                                            <label for="ep_candidateName" class=" form-control-label"> Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" value="<?php echo $data[0]->id?>" hidden>
                                            <input type="text" id="partylistElectionID" name="partylistElectionID" value="<?php echo $data[0]->partylistElectionID?>" hidden>
                                            <input type="text" id="ep_candidateName" name="ep_candidateName" placeholder="Name" class="form-control" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-address-card"></i>
                                            <label for="ep_candidatePosition" class=" form-control-label">Position</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="ep_candidatePosition" name="ep_candidatePosition" placeholder="Position" class="form-control" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="ep_candidateDescription" class=" form-control-label">Description </label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="ep_candidateDescription" id="ep_candidateDescription" rows="4" placeholder="Description" class="form-control" maxlength="200"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                <i style =padding-right:16px; class="fa fa-file-image-o"></i>
                                                    <label for="ep_candidateImage" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-4 col-md-8">
                                                    <input type="file" id="ep_candidateImage" name="ep_candidateImage" accept="image/*" size="20" class="form-control-file">
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
    <!-- END ep_candidate MODAL -->

    <!-- edit ep_candidate MODAL -->
    <div class="modal fade" id="editep_candidateModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:maroon;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Update ep_candidate</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="editep_candidateForm" name="editep_candidateForm">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-user"></i>
                                            <label for="editep_candidateName" class=" form-control-label"> Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" value="<?php echo $data[0]->id?>" hidden>
                                            <input type="text" id="editep_candidateName" name="editep_candidateName" placeholder="Name" class="form-control" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-address-card"></i>
                                            <label for="editep_candidatePosition" class=" form-control-label">Position</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="editep_candidatePosition" name="editep_candidatePosition" placeholder="Position" class="form-control" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="editep_candidateDescription" class=" form-control-label">Description </label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="editep_candidateDescription" id="editep_candidateDescription" rows="4" placeholder="Description" class="form-control" maxlength="200"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                <i style =padding-right:16px; class="fa fa-file-image-o"></i>
                                                    <label for="editep_candidateImage" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-4 col-md-8">
                                                    <input type="file" id="editep_candidateImage" name="editep_candidateImage" value="test" accept="image/*" size="20" class="form-control-file">
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
    <!-- END ep_candidate MODAL -->

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
    // Show partylist details
    var partylistID = "<?php echo $data[0]->id ?>"
    var epID = "<?php echo $data[0]->partylistElectionID ?>"

    function loadviewdata(){

        var partylistName = "<?php echo $data[0]->partylistName ?>"
        var partylistDescription = `<?php echo $data[0]->partylistDescription ?>`
        
                $( ".ep_candidateList" ).append("<p>Description: "+partylistDescription+"</p>");
    }
    // End of show partylist details

    function loadtable(){
        ep_candidateDataTable = $('#ep_candidateTable').DataTable({
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>admin/ep_candidate/show_ep_candidate/"+epID+"/"+partylistID,
            "columns": [
                { data: "id"},
                { data: "candidateImage"},
                { data: "candidateName"},
                { data: "candidatePosition"},
                { data: "candidateStatus", render: function(data, type, row){
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

            "aoColumnDefs": [{"bVisible": false, "aTargets": [0]}, 
                            { "aTargets": [1],
                                render: function(data) {
                                    return '<img src="/eboto/resources/images/'+data+'" length="50" width="50">'
                                }
                            }],
            "order": [[0, "desc"]]
        })
    }

    // To auto load the datatables
    function refresh(){
        var url = "<?php echo base_url()?>admin/ep_candidate/show_ep_candidate/"+epID+"/"+partylistID;

        ep_candidateDataTable.ajax.url(url).load();
    }

    loadtable();
    loadviewdata();

    // load data and pass to edit function
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>admin/ep_candidate/get_ep_candidate/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    $('[name="id"').val(row.id);
                    $('[name="editep_candidateName"]').val(row.candidateName);
                    $('[name="editep_candidatePosition"]').val(row.candidatePosition);
                    $('[name="editep_candidateDescription"]').val(row.candidateDescription);
                    
                    $('#editep_candidateModal').modal('show'); // show bootstrap modal when complete loaded
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
                    url: '<?php echo base_url()?>admin/ep_candidate/delete_ep_candidate',
                    data: {id: id},

                        success:function(data){
                            refresh();
                            Swal.fire(
                                'Deleted!',
                                'The ep_candidate has been deleted.',
                                'success'
                                )
                        }
                });

            }
        })
        
    });
    
    // Create ep_candidate
    $('#addep_candidateForm').on('submit', function(e){
            e.preventDefault();
            $("#upload").attr("disabled", true);

        var ep_candidateName = document.addep_candidateForm.ep_candidateName.value;
        var ep_candidatePosition = document.addep_candidateForm.ep_candidatePosition.value;
        var ep_candidateDescription = document.addep_candidateForm.ep_candidateDescription.value;
        var ep_candidateImage = document.addep_candidateForm.ep_candidateImage.value;
        var ep_candidatePartylist = "<?php echo $data[0]->partylistElectionID ?>"
        var Extension = ep_candidateImage.substring(
            ep_candidateImage.lastIndexOf('.') + 1).toLowerCase();

        if(ep_candidateName == '' || ep_candidatePosition == '' || ep_candidateDescription == '' || ep_candidateImage == ''){
                        Swal.fire({
                                title: 'Warning!',
                                text: 'Please fill out required field.',
                                icon: 'warning',
                                confirmButtonText: 'Ok'
                                })
                                $("#upload").attr("disabled", false);
        }
        else{
            if (Extension == "gif" || Extension == "png" || Extension == "jpeg" || Extension == "jpg") {
                if($('#ep_candidateImage').val() == ''){
                        Swal.fire({
                            title: 'Warning!',
                            text: 'Please select an image.',
                            icon: 'warning',
                            confirmButtonText: 'Ok'
                        })
                        $("#upload").attr("disabled", false);
                    }
                else{
                    // Ajax call
                    $.ajax({
                            url: '<?php echo base_url()?>admin/ep_candidate/add_ep_candidate',
                            type:"post",
                            data: new FormData(this),
                            processData:false,
                            contentType:false,

                            success: function(data){
                                refresh();

                                Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully created a ep_candidate.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        })
                                        $("#upload").attr("disabled", false);
                                        $('#ep_candidateModal').modal('hide');
                                        $('#ep_candidateModal form')[0].reset();
                                    }
                        })
                    // End of Ajax Call
                }
            }
            else{
                Swal.fire({
                            title: 'Warning!',
                            text: 'Invalid image file.',
                            icon: 'warning',
                            confirmButtonText: 'Ok'
                        })
                        $("#upload").attr("disabled", false);
            }
        }



    });

    // End of Create ep_candidate

    // View ep_candidate
    $(document).on("click", ".btn_view", function(){
        var id = this.value;

        window.location.href = "<?php echo base_url()?>admin/ep_candidate/view_ep_candidate/"+id;

    });
    // End of view ep_candidate

    // Update ep_candidate
    $('#editep_candidateForm').on('submit', function(e){
                        e.preventDefault();
                        var id = this.value;

        var editep_candidateName = document.editep_candidateForm.editep_candidateName.value;
        var editep_candidateImage = document.editep_candidateForm.editep_candidateImage.value;
        var editep_candidatePosition = document.editep_candidateForm.editep_candidatePosition.value;
        var editep_candidateDescription = document.editep_candidateForm.editep_candidateDescription.value;
        var Extension = editep_candidateImage.substring(
            editep_candidateImage.lastIndexOf('.') + 1).toLowerCase();



            if(editep_candidateName == '' || editep_candidateImage == ''|| editep_candidatePosition == '' || editep_candidateDescription == '' ){
                                Swal.fire({
                                        title: 'Warning!',
                                        text: 'Please fill out required field.',
                                        icon: 'warning',
                                        confirmButtonText: 'Ok'
                                        })
            }
            else
            {
                if (Extension == "gif" || Extension == "png" || Extension == "jpeg" || Extension == "jpg") {

                        if($('#editep_candidateImage').val() == ''){
                            Swal.fire({
                                        title: 'Warning!',
                                        text: 'Please select an image.',
                                        icon: 'warning',
                                        confirmButtonText: 'Ok'
                            })
                        }
                        else
                        {
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You are updating an ep_candidate!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, update it!'
                            }).then((result) => {
                            if (result.isConfirmed) {                         
                                // ajax post
                                            $.ajax({
                                                url: '<?php echo base_url()?>admin/ep_candidate/update_ep_candidate',
                                                type:"post",
                                                data: new FormData(this),
                                                processData:false,
                                                contentType:false,

                                                success:function()
                                                        {
                                                        
                                                        refresh();
                                                    
                                                        Swal.fire({
                                                            title: 'Success!',
                                                            text: 'You successfully updated an ep_candidate.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Ok'
                                                            })
                                                        
                                                        $('#editep_candidateModal').modal('hide');
                                                        $('#editep_candidateModal form')[0].reset();
                                                            
                                                        }
                                            });
                                    }       
                                })
                        }
                }
                else{
                    Swal.fire({
                            title: 'Warning!',
                            text: 'Invalid image file.',
                            icon: 'warning',
                            confirmButtonText: 'Ok'
                        })
                }
            }
    });
    // End of updating ep_candidate

     // Load vote logs table
     function load_partylist_votes(){
        var electionID = "<?php echo $data[0]->id ?>"
        
        partylistDataTable = $('#partylist_vote_table').DataTable( {
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>admin/reports/get_specific_votes/"+electionID+"/t_election",
            "columns": [
                { data: "id"},
                { data: "ep_candidateName"},
                { data: "voterName"},
                { data: "userStudentNo"},
                { data: "userCourse"},
                { data: "voteDateCreated"},
            ],
            
            "aoColumnDefs": [{"bVisible": false, "aTargets": [0]}],
            "order": [[0, "desc"]]

        })
    }

    load_partylist_votes()
    // End of loadtable


});

</script>

</html>
<!-- end document-->
