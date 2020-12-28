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
                                        <h2>List of Election</h2>
                                    <div class="table-data__tool-right">
                                        <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#electionModal">   
                                        <i style=padding:3px; class="fa fa-plus"></i> 
                                        Create Election </button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table id="electionTable" class="table table-data3" style="width:100%"> 
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
                        <!-- End of Data Table Content -->
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- END MAIN CONTENT-->

    <!-- election MODAL -->
    <div class="modal fade" id="electionModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:#900000;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Create Election</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" name="addelectionForm" id="addelectionForm">
                            <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-trophy"></i>
                                            <label for="electionName" class=" form-control-label">Election Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="electionName" name="electionName" placeholder="Name of Election" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-group"></i>
                                            <label for="electionRestriction" class=" form-control-label">Restriction</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <select name="electionOrg" id="electionOrg" class="form-control">
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
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="electionDescription" class=" form-control-label">Description </label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="electionDescription" id="electionDescription" rows="4" placeholder="Content" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="electionDateStart" class=" form-control-label">Date Start</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" value="<?php echo date("Y-d-m")?>" min="<?php echo date("Y-d-m")?>"
                                            id="electionDateStart" name="electionDateStart" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="electionDateEnd" class=" form-control-label">Date End</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" 
                                            value="<?php echo date("Y-m-d")?>" 
                                            min="<?php echo date("Y-m-d")?>"
                                            id="electionDateEnd" name="electionDateEnd" class="form-control">
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
    <!-- END election MODAL -->

    <!-- Edit election MODAL -->
    <div class="modal fade" id="editelectionModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:gold;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Update Election</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="editelectionForm" name="editelectionForm">
                                <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-trophy"></i>
                                            <label for="electionName" class=" form-control-label">Election Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" hidden>
                                            <input type="text" id="editelectionName" name="editelectionName" placeholder="Name of Election" maxlength="40" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-group"></i>
                                            <label for="electionRestriction" class=" form-control-label">Restriction</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <select name="editelectionOrg" id="editelectionOrg" class="form-control">
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
                                            <label for="electionDescription" class=" form-control-label">Description </label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="editelectionDescription" id="editelectionDescription" rows="4" placeholder="Content" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="electionDateStart" class=" form-control-label">Date Start</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" id="editelectionDateStart" name="editelectionDateStart" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-calendar"></i>
                                            <label for="electionDateEnd" class=" form-control-label">Date End</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="date" id="editelectionDateEnd" name="editelectionDateEnd" class="form-control">
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
    <!-- END edit election MODAL -->
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
        electionDataTable = $('#electionTable').DataTable( {
            "pageLength": 10,
            "ajax": "<?php echo base_url()?>admin/election/show_election",
            "columns": [
                { data: "id"},
                { data: "electionDateEnd"},
                { data: "electionDateStart"},
                { data: "electionName"},
                { data: "electionDateStart", render: function(data, type, row){
                    return moment(data).format('LL');
                }, "orderData":[2]},
                { data: "electionDateEnd", render: function(data, type, row){
                    return moment(data).format('LL');
                }, "orderData":[1]},
                { data: "orgName"},
                { data: "electionStatus", render: function(data, type, row){
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
        var url = "<?php echo base_url()?>admin/election/show_election";

        electionDataTable.ajax.url(url).load();
    }



    // view function
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        window.location.href = "<?php echo base_url()?>admin/election/view_election/"+id;

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
                    url: '<?php echo base_url()?>admin/election/delete_election',
                    data: {id: id},
                        success:function(data){
                            refresh();
                            Swal.fire(
                                'Deleted!',
                                'Your election has been deleted.',
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
            url: '<?php echo base_url()?>admin/election/get_election/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    $('[name="id"').val(row.id);
                    $('[name="editelectionName"]').val(row.electionName);
                    $('[name="editelectionRestriction"]').val(row.electionOrg);
                    $('[name="editelectionDescription"]').val(row.electionDescription);
                    $('[name="editelectionDateStart"]').val(row.electionDateStart.slice(0, 10));
                    $('[name="editelectionDateEnd"]').val(row.electionDateEnd.slice(0, 10));
                    
                    $('#editelectionModal').modal('show'); // show bootstrap modal when complete loaded
                }
        })
       
    });

    loadtable();

    // Create election
    $('#addelectionForm').on('submit', function(e){
        
        e.preventDefault();
        $("#btnCreate").attr("disabled", true);

        var electionName = document.addelectionForm.electionName.value;
        var electionDateStart = document.addelectionForm.electionDateStart.value;
        var electionDateEnd = document.addelectionForm.electionDateEnd.value;

        var dateStart = new Date(electionDateStart);
        var dateEnd = new Date(electionDateEnd);

        var arrName = [];
        console.log(electionName);

        // Check if name is already exist
        $.ajax({
            url: '<?php echo base_url()?>admin/election/show_election',
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data['data']));
                    // var row = parsedResponse[0];

                    // Push all names to array
                    for(i=0; i < parsedResponse.length; i++){
                        var row = parsedResponse[i];
                        arrName.push(row.electionName);
                    }
                    console.log(arrName);
                    // Check if a value exists in the name array
                    if(arrName.includes(electionName)){
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
                        if(electionName == '' || electionDateStart == '' || electionDateEnd == ''){
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
                                var form = $('#addelectionForm');                                
                                // ajax post
                                $.ajax({
                                    url: '<?php echo base_url()?>admin/election/add_election',
                                    type: 'post',
                                    data: form.serialize(),

                                    success:function()
                                            {
                                            
                                            refresh();
                                        
                                            Swal.fire({
                                                title: 'Success!',
                                                text: 'You successfully created a election.',
                                                icon: 'success',
                                                confirmButtonText: 'Ok'
                                                }).then((result) => {
                                                        $("#btnCreate").attr("disabled", false);
                                                        $('#electionModal').modal('hide');
                                                        $('#electionModal form')[0].reset();
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
    // END OF // Create election

    // Update election
    $('#editelectionForm').on('submit', function(e){
                        e.preventDefault();
                        $("#btnUpdate").attr("disabled", true);
                        
                        var id = document.editelectionForm.id.value

                        var editelectionName = document.editelectionForm.editelectionName.value;
                        var editelectionDateStart = document.editelectionForm.editelectionDateStart.value;
                        var editelectionDateEnd = document.editelectionForm.editelectionDateEnd.value;

                        var dateStart = new Date(editelectionDateStart);
                        var dateEnd = new Date(editelectionDateEnd);

                        var arrName = [];

                        var form = ( $( this ).serialize() );
                        
                        
                        if(editelectionName == '' || editelectionDateStart == '' || editelectionDateEnd == ''){
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
                                        url: '<?php echo base_url()?>admin/election/show_election',
                                        dataType: "JSON",

                                            success:function(data){
                                                var parsedResponse = jQuery.parseJSON(JSON.stringify(data['data']));
                                                console.log(parsedResponse);
                                                var user = parsedResponse.find(item => item.id == id);
                                                

                                                // Push all names to array
                                                for(i=0; i < parsedResponse.length; i++){
                                                    var row = parsedResponse[i];
                                                    arrName.push(row.electionName);
                                                    // console.log(user.electionName);
                                                    
                                                }
                                                // Check if a reusing name in the name array
                                                if(user.electionName == editelectionName){
                                                    // ajax call
                                                    console.log( $( this ).serialize() );

                                                    // var form = $('#editelectionForm');

                                                    Swal.fire({
                                                        title: 'Are you sure?',
                                                        text: "You are updating an election!",
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
                                                                            url: '<?php echo base_url()?>admin/election/update_election',
                                                                            type: 'post',
                                                                            data: form,
                                                                            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',

                                                                            success:function()
                                                                                    {
                                                                                    
                                                                                    refresh();
                                                                                
                                                                                    Swal.fire({
                                                                                        title: 'Success!',
                                                                                        text: 'You successfully updated an election.',
                                                                                        icon: 'success',
                                                                                        confirmButtonText: 'Ok'
                                                                                        }).then((result) => {
                                                                                            $("#btnUpdate").attr("disabled", false);
                                                                                            $('#editelectionModal').modal('hide');
                                                                                            $('#editelectionModal form')[0].reset();
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
                                                else if(arrName.includes(editelectionName)){
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
                                                        text: "You are updating an election!",
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
                                                                            url: '<?php echo base_url()?>admin/election/update_election',
                                                                            type: 'post',
                                                                            data: form,
                                                                            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',

                                                                            success:function()
                                                                                    {
                                                                                    
                                                                                    refresh();
                                                                                
                                                                                    Swal.fire({
                                                                                        title: 'Success!',
                                                                                        text: 'You successfully updated an election.',
                                                                                        icon: 'success',
                                                                                        confirmButtonText: 'Ok'
                                                                                        }).then((result) => {
                                                                                            $("#btnUpdate").attr("disabled", false);
                                                                                            $('#editelectionModal').modal('hide');
                                                                                            $('#editelectionModal form')[0].reset();
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

    // END OF // Update election
            

});

        

</script>


 <!-- Ajax form posting -->
<script>
        

</script>

</html>
<!-- end document-->
