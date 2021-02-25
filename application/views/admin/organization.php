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
                        <!-- CONTENT HEADER -->
                        <!-- DATA TABLE -->
                                
                        <div class="table-data__tool">
                                        <h2>List of Organization</h2>
                                    <div class="table-data__tool-right">
                                        <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#organizationModal">   
                                        <i style=padding:3px; class="fa fa-plus"></i> 
                                        Create Organization </button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="organizationTable" class="table table-data3" style="width:100%"> 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Id</th>
                                                <th>Logo</th>
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
                </div>
            </div>
        </div>
    </div> 

    <!-- ORGANIZATION MODAL -->

    <div class="modal fade" id="organizationModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:#28a745;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Create organization</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="addorganizationForm" name="addorganizationForm">
                            <div class="row form-group">
                                        <div class="col col-md-4">
                                        <i style =padding-right:16px; class="fa fa-trophy"></i>
                                            <label for="organizationName" class=" form-control-label">Organization Name <small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="organizationName" name="organizationName" placeholder="Name of Organization" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="organizationLogo" class=" form-control-label">Organization Logo <small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                        <input type="file" name="organizationLogo" id="organizationLogo" accept="image/*" size="20" class="form-control"/>
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END OF CREATE MODAL -->

<!-- UPDATE MODAL -->

    <div class="modal fade" id="editorganizationModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style=background-color:gold;>
                            <h3 class="modal-title" id="largeModalLabel" style=color:white;>Update Organization</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="editorganizationForm" name="editorganizationForm">
                            <div class="row form-group">
                                        <div class="col col-md-4">
                                        <i style =padding-right:16px; class="fa fa-trophy"></i>
                                            <label for="editorganizationName" class=" form-control-label">Organization Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" hidden>
                                            <input type="text" id="editorganizationName" name="editorganizationName" placeholder="Name of Organization" maxlength="30" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="editorganizationLogo" class=" form-control-label">Organization Logo</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                        <input type="file" name="editorganizationLogo" id="editorganizationLogo" accept="image/*" size="20" class="form-control"/>
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input type="submit" name="editupload" id="editupload" value="Upload" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF UPDATE MODAL -->
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

    function loadtable(){
         organizationDataTable = $('#organizationTable').DataTable( {
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>admin/organization/show_organization",
            "columns": [
                { data: "id"},
                { data: "orgLogo"},
                { data: "orgName"},
                { data: "orgStatus", render: function(data, type, row){
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

            "aoColumnDefs": [{"bVisible": false, "aTargets": [0, 1]}],
            "order": [[0, "desc"]]
        })
    }

    function refresh(){
        var url = "<?php echo base_url()?>admin/organization/show_organization";

        organizationDataTable.ajax.url(url).load();
    }

    // delete org
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
                    url: '<?php echo base_url()?>admin/organization/delete_organization',
                    data: {id: id},

                        success:function(data){
                            refresh();
                            Swal.fire(
                                'Deleted!',
                                'Your organization has been deleted.',
                                'success'
                                )
                        }
                });


            }
            })
       
    });

    // edit function
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>/admin/organization/get_organization/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    $('[name="id"').val(row.id);
                    $('[name="editorganizationName"]').val(row.orgName);
                    
                    $('#editorganizationModal').modal('show'); // show bootstrap modal when complete loaded
                }
        })
       
    });

    // Update organization
    $('#editorganizationForm').on('submit', function(e){
                        e.preventDefault();
                        var id = this.value;

        var editorganizationName = document.editorganizationForm.editorganizationName.value;
        var editorganizationLogo = document.editorganizationForm.editorganizationLogo.value;
        var Extension = editorganizationLogo.substring(
            editorganizationLogo.lastIndexOf('.') + 1).toLowerCase();



            if(editorganizationName == '' || editorganizationLogo == ''){
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

                        if($('#editorganizationLogo').val() == ''){
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
                            text: "You are updating an organization!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, update it!'
                            }).then((result) => {
                            if (result.isConfirmed) {                         
                                // ajax post
                                            $.ajax({
                                                url: '<?php echo base_url()?>admin/organization/update_organization',
                                                type:"post",
                                                data: new FormData(this),
                                                processData:false,
                                                contentType:false,

                                                success:function()
                                                        {
                                                        
                                                        refresh();
                                                    
                                                        Swal.fire({
                                                            title: 'Success!',
                                                            text: 'You successfully updated an organization.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Ok'
                                                            })
                                                        
                                                        $('#editorganizationModal').modal('hide');
                                                        $('#editorganizationModal form')[0].reset();
                                                            
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

    // View organization
    $(document).on("click", ".btn_view", function(){
        var id = this.value;

        window.location.href = "<?php echo base_url()?>admin/organization/view_organization/"+id;

    });

    loadtable();

// Create org
    $('#addorganizationForm').on('submit', function(e){
            e.preventDefault();
            $("#upload").attr("disabled", true);

        var addorganizationName = document.addorganizationForm.organizationName.value;
        var addorganizationLogo = document.addorganizationForm.organizationLogo.value;
        var Extension = addorganizationLogo.substring(
            addorganizationLogo.lastIndexOf('.') + 1).toLowerCase();


        if(addorganizationName == '' || addorganizationLogo == ''){
                                Swal.fire({
                                        title: 'Warning!',
                                        text: 'Please fill out required field.',
                                        icon: 'warning',
                                        confirmButtonText: 'Ok'
                                        })
                                        $("#upload").attr("disabled", false);
        }
        else
        {
            if (Extension == "gif" || Extension == "png" || Extension == "jpeg" || Extension == "jpg") {


                    if($('#organizationLogo').val() == ''){
                        Swal.fire({
                            title: 'Warning!',
                            text: 'Please select an image.',
                            icon: 'warning',
                            confirmButtonText: 'Ok'
                        })
                        $("#upload").attr("disabled", false);
                    }
                    else
                    {
                        $.ajax({
                            url: '<?php echo base_url()?>admin/organization/add_organization',
                            type: "post",
                            data: new FormData(this),
                            processData:false,
                            contentType:false,

                            success: function(data){

                                refresh()
                                Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully created an organization.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        })
                                        $("#upload").attr("disabled", false);
                                        $('#organizationModal').modal('hide');
                                        $('#organizationModal form')[0].reset();
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
                        $("#upload").attr("disabled", false);
            }
        }
    });
});


</script>


</html>
<!-- end document-->
