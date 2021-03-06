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

                                <!-- DATA TABLE -->
                                    <div class="table-data__tool">
                                                <h2>List of User</h2>
                                            <div class="table-data__tool-right">
                                            <div>
                                            <label>Download this for: </label>
                                                    <a href="<?php echo base_url() ?>resources/files/multipleuser.xlsx">Multiple User Excel Format.xlsx</a>
                                            </div>
                                                    
                                                <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addUserModal">   
                                                <i style=padding:3px; class="fa fa-plus"></i> 
                                                Add Individual User </button>
                                                <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#addExcel">   
                                                <i style=padding:3px; class="fa fa-plus"></i> 
                                                Add Multiple User </button>
                                            </div>
                                        </div>
                                        <div class="table-responsive table-responsive-data2">
                                            <table id="userTable" class="table table-data3" style="width:100%"> 
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th hidden>Id</th>
                                                        <th>Name</th>
                                                        <th>Student Number</th>
                                                        <th>Email</th>
                                                        <th>Course</th>
                                                        <th>Type</th> 
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

        <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

     <!-- ADD EXCEL MODAL -->
     <div class="modal fade" id="addExcel" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:#28a745;>
                    <h3 class="modal-title" id="largeModalLabel" style=color:white;>Add Multiple User</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="addExcelForm" name="addExcelForm">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                            <label for="excelFile" class=" form-control-label">Excel File<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                        <input id="excelFile" name="excelFile" type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input type="submit" name="Submit" id="btnAddExcel" value="Submit" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF EXCEL USER MODAL -->

     <!-- ADD USER MODAL -->
     <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:#28a745;>
                    <h3 class="modal-title" id="largeModalLabel" style=color:white;>Add User</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="addUserForm" name="addUserForm">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="userFirstName" class=" form-control-label">First Name<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="userFirstName" name="userFirstName" placeholder="First Name" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="userMiddleName" class=" form-control-label">Middle Name <small style=color:red> </small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="userMiddleName" name="userMiddleName" placeholder="Middle Name" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="userLastName" class=" form-control-label">Last Name <small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="userLastName" name="userLastName" placeholder="Last Name" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="userStudentNo" class=" form-control-label">Student Number<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="userStudentNo" name="userStudentNo" placeholder="Student Number" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="userEmail" class=" form-control-label">Email<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="email" id="userEmail" name="userEmail" placeholder="Email" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="userCourse" class=" form-control-label">Course<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="userCourse" name="userCourse" placeholder="Course" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="userType" class=" form-control-label">Type<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <select name="userType" id="userType" class="form-control">
                                                <option value="1">Student</option>
                                                <option value="2">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input type="submit" name="Submit" id="btnAddUser" value="Submit" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF CREATE USER MODAL -->

     <!-- UPDATE USER MODAL -->
     <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:gold;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Update User</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="editUserForm" name="editUserForm">
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="edituserFirstName" class=" form-control-label">First Name<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input hidden type="text" id="id" name="id" placeholder="First Name" maxlength="40" class="form-control">
                                            <input type="text" id="edituserFirstName" name="edituserFirstName" placeholder="First Name" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="edituserMiddleName" class=" form-control-label">Middle Name <small style=color:red> </small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="edituserMiddleName" name="edituserMiddleName" placeholder="Middle Name" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="edituserLastName" class=" form-control-label">Last Name <small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="edituserLastName" name="edituserLastName" placeholder="Last Name" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="edituserStudentNo" class=" form-control-label">Student Number<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="edituserStudentNo" name="edituserStudentNo" placeholder="Student Number" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="edituserEmail" class=" form-control-label">Email<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="email" id="edituserEmail" name="edituserEmail" placeholder="Email" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="edituserCourse" class=" form-control-label">Course<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="edituserCourse" name="edituserCourse" placeholder="Course" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-4">
                                        <!-- <i style =padding-right:16px; class="fa fa-trophy"></i> -->
                                            <label for="edituserType" class=" form-control-label">Type<small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <select name="edituserType" id="edituserType" class="form-control">
                                                <option value="1">Student</option>
                                                <option value="2">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input type="submit" name="Update" id="btnEditUser" value="Update" class="btn btn-warning">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF UPDATE USER MODAL -->

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
        userDataTable = $('#userTable').DataTable( {
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>admin/userrole/show_user",
            "columns": [
                { data: "id"},
                { data: "userLastName", render: function(data, type, row){
                    return row.userLastName + ', ' +row.userFirstName + ' ' + row.userMiddleName
                }},
                { data: "userStudentNo"},
                { data: "userEmail"},
                { data: "userCourse"},
                { data: "userType", render: function(data, type, row){
                    if(data == 1)
                        return 'Student'
                    else
                        return 'Admin'
                }},
                { data: "userStatus", render: function(data, type, row){
                    if(data == 1){
                        return '<div class="btn-group">'+
                                '<button class="btn btn-warning btn-sm btn_edit" value="'+row.id+'" title="Edit" type="button" ><i class="zmdi zmdi-edit"></i> </button>'+
                                '<button class="btn btn-danger btn-sm btn_delete" value="'+row.id+'" title="Delete" type="button"> <i class="zmdi zmdi-delete"> </i></button></div>';
                    }   
                    else{
                        return '<button class="btn btn-sm btn-secondary btn_activate" value="'+row.id+'">Activate</button>';
                    }
                }}
            ],
            "aoColumnDefs": [{"bVisible": false, "aTargets": [0]}],
            "order": [[1, "asc"]]
        })
    }

    function refresh(){
        var url = "<?php echo base_url()?>admin/userrole/show_user";

        userDataTable.ajax.url(url).load();
    }

    loadtable()


    // Create org
    $('#addUserForm').on('submit', function(e){
                e.preventDefault();
                $("#btnAddUser").attr("disabled", true);

            var userFirstName = $('#userFirstName').val()
            var userMiddleName = $('#userMiddleName').val()
            var userLastName = $('#userLastName').val()
            var userStudentNo = $('#userStudentNo').val()
            var userEmail = $('#userEmail').val()
            var userCourse = $('#userCourse').val()
            var userType = $('#userType').val()

            if(userFirstName == '' || userLastName == '' || userStudentNo == '' || userEmail == '' || userCourse == '' || userType == ''){
                                    Swal.fire({
                                            title: 'Warning!',
                                            text: 'Please fill out required field.',
                                            icon: 'warning',
                                            confirmButtonText: 'Ok'
                                            })
                                            $("#btnAddUser").attr("disabled", false);
            }
            else
            {
                    $.ajax({
                        url: '<?php echo base_url()?>admin/userrole/add_user',
                        type: "post",
                        data: new FormData(this),
                        processData:false,
                        contentType:false,

                        success: function(data){

                            refresh()
                            Swal.fire({
                                    title: 'Success!',
                                    text: 'You successfully add a user.',
                                    icon: 'success',
                                    confirmButtonText: 'Ok'
                                    })
                                    $("#btnAddUser").attr("disabled", false);
                                    $('#addUserModal').modal('hide');
                                    $('#addUserModal form')[0].reset();
                                }
                    })
            }
    });

    // Create org
    $('#addExcelForm').on('submit', function(e){
            e.preventDefault();
            $("#btnAddExcel").attr("disabled", true);

            var excelFile = $('#excelFile').val()
            var Extension = excelFile.substring(
                excelFile.lastIndexOf('.') + 1).toLowerCase();

            if (Extension == "xlsx") {
                    $.ajax({
                        url: '<?php echo base_url()?>admin/userrole/import',
                        type: "post",
                        data: new FormData(this),
                        processData:false,
                        contentType:false,
                    
                        success: function(){
                            refresh()
                            Swal.fire({
                                title: 'Success!',
                                text: 'You successfully add a multiple user.',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                                })
                                $("#btnAddExcel").attr("disabled", false);
                                $('#addExcel').modal('hide');
                                $('#addExcel form')[0].reset();
                        }
                    })
            }
            else{
                Swal.fire({
                            title: 'Warning!',
                            text: 'Should be .xlsx file!',
                            icon: 'warning',
                            confirmButtonText: 'Ok'
                        })
                    $("#btnAddExcel").attr("disabled", false);
            }
    });

    // edit function
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>/admin/userrole/get_user/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    $('[name="id"').val(row.id);
                    $('[name="edituserFirstName"]').val(row.userFirstName);
                    $('[name="edituserMiddleName"]').val(row.userMiddleName);
                    $('[name="edituserLastName"]').val(row.userLastName);
                    $('[name="edituserStudentNo"]').val(row.userStudentNo);
                    $('[name="edituserEmail"]').val(row.userEmail);
                    $('[name="edituserCourse"]').val(row.userCourse);
                    $('[name="edituserType"]').val(row.userType);
                    
                    $('#editUserModal').modal('show'); // show bootstrap modal when complete loaded
                }
        })
       
    });

    // Update user
    $('#editUserForm').on('submit', function(e){
                e.preventDefault();
                $("#btnEditUser").attr("disabled", true);

            var userFirstName = $('#edituserFirstName').val()
            var userMiddleName = $('#edituserMiddleName').val()
            var userLastName = $('#edituserLastName').val()
            var userStudentNo = $('#edituserStudentNo').val()
            var userEmail = $('#edituserEmail').val()
            var userCourse = $('#edituserCourse').val()
            var userType = $('#edituserType').val()

            if(userFirstName == '' || userLastName == '' || userStudentNo == '' || userEmail == '' || userCourse == '' || userType == ''){
                                    Swal.fire({
                                            title: 'Warning!',
                                            text: 'Please fill out required field.',
                                            icon: 'warning',
                                            confirmButtonText: 'Ok'
                                            })
                                            $("#btnEditUser").attr("disabled", false);
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
                                $.ajax({
                                url: '<?php echo base_url()?>admin/userrole/update_user',
                                type: "post",
                                data: new FormData(this),
                                processData:false,
                                contentType:false,

                                success: function(data){

                                    refresh()
                                    Swal.fire({
                                            title: 'Success!',
                                            text: 'You successfully update a user.',
                                            icon: 'success',
                                            confirmButtonText: 'Ok'
                                            })
                                            $("#btnEditUser").attr("disabled", false);
                                            $('#editUserModal').modal('hide');
                                            $('#editUserModal form')[0].reset();
                                        }
                                    })
                            }
                            $("#btnEditUser").attr("disabled", false);
                            $('#editUserModal').modal('hide');
                            $('#editUserModal form')[0].reset();
                        })
            }
    });

    // DELETE USER
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, deactivate it!'
            }).then((result) => {
            if (result.isConfirmed) {
                
                $.ajax({
                    url: '<?php echo base_url()?>admin/userrole/delete_user',
                    data: {id: id},

                        success:function(data){
                            refresh();
                            Swal.fire(
                                'Deleted!',
                                'User has been deactivated!.',
                                'success'
                                )
                        }
                });


            }
            })
       
    });
    // END OF DELETE USER

    // ACTIVATE USER
    $(document).on("click", ".btn_activate", function(){
        var id = this.value;

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, activate it!'
            }).then((result) => {
            if (result.isConfirmed) {
                
                $.ajax({
                    url: '<?php echo base_url()?>admin/userrole/activate_user',
                    data: {id: id},

                        success:function(data){
                            refresh();
                            Swal.fire(
                                'Success!',
                                'User has been activated!.',
                                'success'
                                )
                        }
                });


            }
        })
       
    });
    // END OF DELETE USER


});
</script>

</html>
<!-- end document-->
