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
                        <!-- Data Table Content -->
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">

                                <!-- DATA TABLE -->
                                
                                <div class="table-data__tool">
                                        <h2>List of Contest</h2>
                                    <div class="table-data__tool-right">
                                        <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#contestModal">   
                                        <i style=padding:3px; class="fa fa-plus"></i> 
                                        Create Contest </button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="contestTable" class="table table-data3" style="width:100%"> 
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Id</th>
                                                <th>Hidden Date End</th>
                                                <th>Hidden Date Start</th>
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

    <!-- contest MODAL -->
    <div class="modal fade" id="contestModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:#900000;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Create Contest</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" name="addcontestForm" id="addcontestForm">
                            <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-trophy"></i>
                                            <label for="contestName" class=" form-control-label">Contest Name <small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="contestName" name="contestName" placeholder="Name of contest" maxlength="50" class="form-control">
                                        </div>
                                    </div>
                                    <div id="divcontestOrg">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                            <i style =padding-right:16px; class="fa fa-group"></i>
                                                <label for="contestRestriction" class=" form-control-label">Restriction <small style=color:red> *</small></label>
                                            </div>
                                            <div class="col-4 col-md-8">
                                                <select name="contestOrg" id="contestOrg" class="form-control">
                                                <option value=""></option>
                                                    <?php 
                                                        foreach($data as $row)
                                                        { 
                                                            echo $row->orgName;
                                                        echo '<option value="'.$row->id.'">'.$row->orgName.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="contestDescription" class=" form-control-label">Description </label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="contestDescription" id="contestDescription" placeholder="Content" class="form-control" maxlength="200"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="contestDateStart" class=" form-control-label">Date Start</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" value="<?php echo date("Y-m-d")?>" min="<?php echo date("Y-m-d")?>"
                                            id="contestDateStart" name="contestDateStart" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="contestDateEnd" class=" form-control-label">Date End</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" 
                                            value="<?php echo date('Y-m-d', strtotime('+1 day', strtotime(date('Y-m-d'))))?>" 
                                            min="<?php echo date('Y-m-d', strtotime('+1 day', strtotime(date('Y-m-d'))))?>"
                                            id="contestDateEnd" name="contestDateEnd" class="form-control">
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input style=background-color:#28a745; type="submit" id="btnCreate" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END contest MODAL -->

    <!-- Edit contest MODAL -->
    <div class="modal fade" id="editcontestModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:gold;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Update contest</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="editcontestForm" name="editcontestForm">
                                <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-trophy"></i>
                                            <label for="contestName" class=" form-control-label">contest Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" hidden>
                                            <input type="text" id="editcontestName" name="editcontestName" placeholder="Name of contest" maxlength="50" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-group"></i>
                                            <label for="contestRestriction" class=" form-control-label">Restriction</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <select name="editcontestOrg" id="editcontestOrg" class="form-control">
                                                <?php 
                                                foreach($data as $row)
                                                { 
                                                echo '<option value="'.$row->id.'">'.$row->orgName.'</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="contestDescription" class=" form-control-label">Description </label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="editcontestDescription" id="editcontestDescription" rows="4" placeholder="Content" class="form-control" maxlength="200"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="contestDateStart" class=" form-control-label">Date Start</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" id="editcontestDateStart" name="editcontestDateStart" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="contestDateEnd" class=" form-control-label">Date End</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" id="editcontestDateEnd" name="editcontestDateEnd" class="form-control">
                                        </div>
                                    </div>
                                    <div style= float:right;>
                                        <input style=background-color:#28a745; type="submit" id="btnUpdate" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END edit contest MODAL -->
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
        contestDataTable = $('#contestTable').DataTable( {
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>admin/contest/show_contest",
            "columns": [
                { data: "id"},
                { data: "contestDateEnd"},
                { data: "contestDateStart"},
                { data: "contestName"},
                { data: "contestDateStart", render: function(data, type, row){
                    return moment(data).format('LL');
                }, "orderData":[2]},
                { data: "contestDateEnd", render: function(data, type, row){
                    return moment(data).format('LL');
                }, "orderData":[1]},
                { data: "orgName"},
                { data: "contestStatus", render: function(data, type, row){
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

            "aoColumnDefs": [{"bVisible": false, "aTargets": [0, 1, 2]}],
            "order": [[0, "desc"]]
        })
    }


    function refresh(){
        var url = "<?php echo base_url()?>admin/contest/show_contest";

        contestDataTable.ajax.url(url).load();
    }

    // view function
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        window.location.href = "<?php echo base_url()?>admin/contest/view_contest/"+id;

    });
    // end of view function


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
                    url: '<?php echo base_url()?>admin/contest/delete_contest',
                    data: {id: id},
                        success:function(data){
                            refresh();
                            Swal.fire(
                                'Deleted!',
                                'Your contest has been deleted.',
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
            url: '<?php echo base_url()?>admin/contest/get_contest/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    $('[name="id"').val(row.id);
                    $('[name="editcontestName"]').val(row.contestName);
                    $('[name="editcontestOrg"]').val(row.contestOrg);
                    $('[name="editcontestDescription"]').val(row.contestDescription);
                    $('[name="editcontestDateStart"]').val(row.contestDateStart.slice(0, 10));
                    $('[name="editcontestDateEnd"]').val(row.contestDateEnd.slice(0, 10));
                    
                    $('#editcontestModal').modal('show'); // show bootstrap modal when complete loaded
                }
        })
       
    });

    loadtable();

    // Create contest
    $('#addcontestForm').on('submit', function(e){
        
        e.preventDefault();
        $("#btnCreate").attr("disabled", true);

        var contestName = document.addcontestForm.contestName.value;
        var contestDateStart = document.addcontestForm.contestDateStart.value;
        var contestDateEnd = document.addcontestForm.contestDateEnd.value;

        var dateStart = new Date(contestDateStart);
        var dateEnd = new Date(contestDateEnd);

        var arrName = [];
        console.log(contestName);

        // Check if name is already exist
        $.ajax({
            url: '<?php echo base_url()?>admin/contest/show_contest',
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data['data']));
                    // var row = parsedResponse[0];

                    // Push all names to array
                    for(i=0; i < parsedResponse.length; i++){
                        var row = parsedResponse[i];
                        arrName.push(row.contestName);
                    }
                    console.log(arrName);
                    // Check if a value exists in the name array
                    if(arrName.includes(contestName)){
                                            Swal.fire({
                                                    title: 'Warning!',
                                                    text: 'Name is already existing in active list!',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                    }).then((result) => {
                                                        $("#btnCreate").attr("disabled", false);
                                                    })
                    }
                    else{
                        if(contestName == '' || contestDateStart == '' || contestDateEnd == ''){
                                            Swal.fire({
                                                    title: 'Warning!',
                                                    text: 'Please fill out required field.',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                    }).then((result) => {
                                                        $("#btnCreate").attr("disabled", false);
                                                    })
                        }
                        else{

                            if(dateStart > dateEnd){
                                Swal.fire({
                                                    title: 'Warning!',
                                                    text: 'Invalid Date Start and Date End',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                    }).then((result) => {
                                                        $("#btnCreate").attr("disabled", false);
                                                    })
                            }
                            
                            else{
                           
                            // ajax call
                                var form = $('#addcontestForm');                                
                                // ajax post
                                $.ajax({
                                    url: '<?php echo base_url()?>admin/contest/add_contest',
                                    type: 'post',
                                    data: form.serialize(),

                                    success:function()
                                            {
                                            
                                            refresh();
                                        
                                            Swal.fire({
                                                title: 'Success!',
                                                text: 'You successfully created a contest.',
                                                icon: 'success',
                                                confirmButtonText: 'Ok'
                                                }).then((result) => {
                                                        $("#btnCreate").attr("disabled", false);
                                                        $('#contestModal').modal('hide');
                                                        $('#contestModal form')[0].reset();
                                                    })
  
                                            }
                                });
                                // end of ajax call
                            }   
                        }
                        // End of conditions

                    }
                }
        })
        

                        
        // End of check if name is already exist
                    
                        
                        
    });
    // END OF // Create contest

    // Update contest
    $('#editcontestForm').on('submit', function(e){
                        e.preventDefault();
                        $("#btnUpdate").attr("disabled", true);
                        
                        var id = document.editcontestForm.id.value

                        var editcontestName = document.editcontestForm.editcontestName.value;
                        var editcontestDateStart = document.editcontestForm.editcontestDateStart.value;
                        var editcontestDateEnd = document.editcontestForm.editcontestDateEnd.value;

                        var dateStart = new Date(editcontestDateStart);
                        var dateEnd = new Date(editcontestDateEnd);

                        var arrName = [];

                        var form = ( $( this ).serialize() );
                        
                        
                        if(editcontestName == '' || editcontestDateStart == '' || editcontestDateEnd == ''){
                                            Swal.fire({
                                                    title: 'Warning!',
                                                    text: 'Please fill out required field.',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                    }).then((result) => {
                                                        $("#btnUpdate").attr("disabled", false);
                                                    })
                        }
                        else{
                        
                            if(dateStart > dateEnd){
                                Swal.fire({
                                                    title: 'Warning!',
                                                    text: 'Invalid Date Start and Date End',
                                                    icon: 'warning',
                                                    confirmButtonText: 'Ok'
                                                    }).then((result) => {
                                                        $("#btnUpdate").attr("disabled", false);
                                                    })
                            }
                            
                            else{
                                // Check if name is already exist
                                    $.ajax({
                                        url: '<?php echo base_url()?>admin/contest/show_contest',
                                        dataType: "JSON",

                                            success:function(data){
                                                var parsedResponse = jQuery.parseJSON(JSON.stringify(data['data']));
                                                console.log(parsedResponse);
                                                var user = parsedResponse.find(item => item.id == id);
                                                

                                                // Push all names to array
                                                for(i=0; i < parsedResponse.length; i++){
                                                    var row = parsedResponse[i];
                                                    arrName.push(row.contestName);
                                                    // console.log(user.contestName);
                                                    
                                                }
                                                // Check if a reusing name in the name array
                                                if(user.contestName == editcontestName){
                                                    // ajax call
                                                    console.log( $( this ).serialize() );

                                                    // var form = $('#editcontestForm');

                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You are updating an contest!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Yes, update it!'
                                                        }).then((result) => {
                                                        if (result.isConfirmed) {                         
                                                            // ajax post
                                                            console.log(form);
                                                                        $.ajax({
                                                                            url: '<?php echo base_url()?>admin/contest/update_contest',
                                                                            type: 'post',
                                                                            data: form,
                                                                            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',

                                                                            success:function()
                                                                                    {
                                                                                    
                                                                                    refresh();
                                                                                
                                                                                    Swal.fire({
                                                                                        title: 'Success!',
                                                                                        text: 'You successfully updated an contest.',
                                                                                        icon: 'success',
                                                                                        confirmButtonText: 'Ok'
                                                                                        }).then((result) => {
                                                                                            $("#btnUpdate").attr("disabled", false);
                                                                                            $('#editcontestModal').modal('hide');
                                                                                            $('#editcontestModal form')[0].reset();
                                                                                        })
                                                                                        
                                                                                    }
                                                                        });
                                                        }
                                                        else{
                                                            $("#btnUpdate").attr("disabled", false);
                                                        }
                                                    })
                                                    // end of ajax call
                                                
                                                }
                                                // Check if a value exists in the name array
                                                else if(arrName.includes(editcontestName)){
                                                                        Swal.fire({
                                                                                title: 'Warning!',
                                                                                text: 'Name is already existing in active list!',
                                                                                icon: 'warning',
                                                                                confirmButtonText: 'Ok'
                                                                                }).then((result) => {
                                                                                    $("#btnUpdate").attr("disabled", false);
                                                                                })
                                                }
                                                else{
                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You are updating an contest!",
                                                        icon: 'warning',
                                                        showCancelButton: true,
                                                        confirmButtonColor: '#3085d6',
                                                        cancelButtonColor: '#d33',
                                                        confirmButtonText: 'Yes, update it!'
                                                        }).then((result) => {
                                                        if (result.isConfirmed) {                         
                                                            // ajax post
                                                            console.log(form);
                                                                        $.ajax({
                                                                            url: '<?php echo base_url()?>admin/contest/update_contest',
                                                                            type: 'post',
                                                                            data: form,
                                                                            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',

                                                                            success:function()
                                                                                    {
                                                                                    
                                                                                    refresh();
                                                                                
                                                                                    Swal.fire({
                                                                                        title: 'Success!',
                                                                                        text: 'You successfully updated an contest.',
                                                                                        icon: 'success',
                                                                                        confirmButtonText: 'Ok'
                                                                                        }).then((result) => {
                                                                                            $("#btnUpdate").attr("disabled", false);
                                                                                            $('#editcontestModal').modal('hide');
                                                                                            $('#editcontestModal form')[0].reset();
                                                                                        })
                                                                                        
                                                                                    }
                                                                        });
                                                        }
                                                        else{
                                                            $("#btnUpdate").attr("disabled", false);
                                                        }
                                                    })
                                                }
                                            }
                                    })
                        }
                    }
                });

    // END OF // Update contest

    // POPPING Password Input If PRIVATE mode is selected
$(document).on("change", "#contestOrg", function(){
    var orgSelected = document.getElementById("contestOrg").value;
    $.ajax({
        url: '<?php echo base_url()?>admin/contest/get_private',
        type: "GET",
        dataType: "JSON",

        success: function(data){
            var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
            var row = parsedResponse[0]
            var contestPassword = jQuery(`<div class="row form-group" id="divcontestPassword">
                                                <div class="col col-md-3">
                                                    <i style =padding-right:16px; class="fa fa-lock"></i>
                                                    <label for="contestPassword" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-4 col-md-8">
                                                    <input type="password" id="contestPassword" name="contestPassword" placeholder="Password" maxlength="50" class="form-control">
                                                </div>
                                            </div>`)
            
            if(orgSelected == row.id){
                
                jQuery('#divcontestOrg').append(contestPassword);
            }
            else{
                jQuery('#divcontestPassword').remove();
            }
        }
    })
})
// End of POPPING Password

});

    
</script>
        

</script>

</html>
<!-- end document-->
