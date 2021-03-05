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

    <!-- Date Time JS-->
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
                        <!-- END OF OPENING MAIN CONTENT DIV -->
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
                                    <div class="au-card-inner text-center partylistList">
                                        <h2><?php echo $data[0]->epName?></h2>
                                    </div>
                                    <div class="au-card-inner text-center">
                                        <label>Vote Link: </label>
                                        <a target="_blank" href="<?php echo base_url() ?>user/vote/view/<?php echo $data[0]->id?>/t_candidate/t_ep">eboto.com/user/vote/view/<?php echo $data[0]->id?>/t_candidate/t_ep</a>
                                    </div>
                                </div>

                            <!-- Data Table Content -->
                            <div class="au-card m-b-30">
                                <div class="au-card-inner">
                                    <!-- DATA TABLE -->
                                        <div class="table-data__tool">
                                            <h2>List of Partylist</h2>
                                            <div class="table-data__tool-right">
                                                <button  type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#partylistModal">   
                                                <i style=padding:3px; class="fa fa-plus"></i> 
                                                Add Partylist </button>
                                            </div>
                                        </div>
                                        <div class="table-responsive table-responsive-data2">
                                            <table id="partylistTable" class="table table-data3" style="width:100%"> 
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Partylist Logo</th>
                                                        <th>Partylist Name</th>
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
                                                <table id="election_vote_table" class="table table-data3" style="width:100%"> 
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>Hidden ID</th>
                                                            <th>Candidate Name</th>
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
                            <!-- End of Data Table Content -->
                        </div>

                        <!-- START OF CLOSING MAIN CONTENT DIV -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF MAIN CONTENT -->

<!--END OF PAGE WRAPPER  -->
</div>
</div>
<!-- END OF PAGE CONTAINER -->

<!-- partylist MODAL -->
<div class="modal fade" id="partylistModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:#28a745;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Add partylist</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="addpartylistForm" name="addpartylistForm">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-user"></i>
                                            <label for="partylistName" class=" form-control-label"> Name <small style=color:red> *</small></label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" value="<?php echo $data[0]->id?>" hidden>
                                            <input type="text" id="partylistName" name="partylistName" placeholder="Name" class="form-control" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="partylistDescription" class=" form-control-label">Description <small style=color:red> *</small> </label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="partylistDescription" id="partylistDescription" rows="4" placeholder="Description" class="form-control" maxlength="200"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                <i style =padding-right:16px; class="fa fa-file-image-o"></i>
                                                    <label for="partylistImage" class=" form-control-label">Image <small style=color:red> *</small></label>
                                                </div>
                                                <div class="col-4 col-md-8">
                                                    <input type="file" id="partylistImage" name="partylistImage" accept="image/*" size="20" class="form-control-file">
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
    <!-- END partylist MODAL -->

    <!-- edit partylist MODAL -->
    <div class="modal fade" id="editpartylistModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style=background-color:gold;>
							<h3 class="modal-title" id="largeModalLabel" style=color:white;>Update partylist</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
                </div>
                <div class="card">   
                        <div class="card-body card-block">
                            <form action="" method="post" id="editpartylistForm" name="editpartylistForm">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-user"></i>
                                            <label for="editpartylistName" class=" form-control-label"> Name</label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <input type="text" id="id" name="id" value="<?php echo $data[0]->id?>" hidden>
                                            <input type="text" id="editpartylistName" name="editpartylistName" placeholder="Name" class="form-control" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                        <i style =padding-right:16px; class="fa fa-comment"></i>
                                            <label for="editpartylistDescription" class=" form-control-label">Description </label>
                                        </div>
                                        <div class="col-4 col-md-8">
                                            <textarea name="editpartylistDescription" id="editpartylistDescription" rows="4" placeholder="Description" class="form-control" maxlength="200"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                <i style =padding-right:16px; class="fa fa-file-image-o"></i>
                                                    <label for="editpartylistImage" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-4 col-md-8">
                                                    <input type="file" id="editpartylistImage" name="editpartylistImage" value="test" accept="image/*" size="20" class="form-control-file">
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
    <!-- END partylist MODAL -->

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
// Show ep details
var epID = "<?php echo $data[0]->id ?>"

function loadviewdata(){

    var epID = "<?php echo $data[0]->id ?>"
    var epDateStart = "<?php echo $data[0]->epDateStart ?>"
    var epDateEnd = "<?php echo $data[0]->epDateEnd ?>"
    var epDescription = `<?php echo $data[0]->epDescription ?>`
    

        const clock = document.getElementById('liveclock');
        setInterval(() => {
            // clock.textContent 
            clock.textContent = moment(epDateEnd).endOf('seconds').fromNow();
        }, 1000);

            $( ".partylistList" ).append("<p style='white-space: pre-wrap;'>Description: "+epDescription+"</p>");
            $( ".partylistList" ).append("<p>Date Start: "+(moment(epDateStart).format('LL'))+"</p>");
            $( ".partylistList" ).append("<p>Date End: "+(moment(epDateEnd).format('LL'))+"</p>");
}
// End of show ep details

function loadtable(){
    partylistDataTable = $('#partylistTable').DataTable({
        "pageLength": 10,
        "ajax": "<?php echo base_url()?>admin/partylist/show_partylist/"+epID,
        "columns": [
            { data: "id"},
            { data: "partylistImage"},
            { data: "partylistName"},
            { data: "partylistStatus", render: function(data, type, row){
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
    var url = "<?php echo base_url()?>admin/partylist/show_partylist/"+epID;

    partylistDataTable.ajax.url(url).load();
}

loadtable();
loadviewdata();

// load data and pass to edit function
$(document).on("click", ".btn_edit", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>admin/partylist/get_partylist/'+id,
            type: "GET",
            dataType: "JSON",

                success:function(data){
                    var parsedResponse = jQuery.parseJSON(JSON.stringify(data));
                    var row = parsedResponse[0];
                    $('[name="id"').val(row.id);
                    $('[name="editpartylistName"]').val(row.partylistName);
                    $('[name="editpartylistDescription"]').val(row.partylistDescription);
                    
                    $('#editpartylistModal').modal('show'); // show bootstrap modal when complete loaded
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
                    url: '<?php echo base_url()?>admin/partylist/delete_partylist',
                    data: {id: id},

                        success:function(data){
                            refresh();
                            Swal.fire(
                                'Deleted!',
                                'The partylist has been deleted.',
                                'success'
                                )
                        }
                });

            }
        })
        
    });
    
    // Create partylist
    $('#addpartylistForm').on('submit', function(e){
            e.preventDefault();
            $("#upload").attr("disabled", true);

        var partylistName = document.addpartylistForm.partylistName.value;
        var partylistDescription = document.addpartylistForm.partylistDescription.value;
        var partylistImage = document.addpartylistForm.partylistImage.value;
        var Extension = partylistImage.substring(
            partylistImage.lastIndexOf('.') + 1).toLowerCase();

        if(partylistName == '' || partylistDescription == '' || partylistImage == ''){
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
                if($('#partylistImage').val() == ''){
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
                            url: '<?php echo base_url()?>admin/partylist/add_partylist',
                            type:"post",
                            data: new FormData(this),
                            processData:false,
                            contentType:false,

                            success: function(data){
                                refresh();

                                Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully created a partylist.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        })
                                        $("#upload").attr("disabled", false);
                                        $('#partylistModal').modal('hide');
                                        $('#partylistModal form')[0].reset();
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

    // End of Create partylist

    // View partylist
    $(document).on("click", ".btn_view", function(){
        var id = this.value;

        window.location.href = "<?php echo base_url()?>admin/partylist/view_partylist/"+id;

    });
    // End of view partylist

    // Update partylist
    $('#editpartylistForm').on('submit', function(e){
                        e.preventDefault();
                        var id = this.value;

        var editpartylistName = document.editpartylistForm.editpartylistName.value;
        var editpartylistImage = document.editpartylistForm.editpartylistImage.value;
        var editpartylistDescription = document.editpartylistForm.editpartylistDescription.value;
        var Extension = editpartylistImage.substring(
            editpartylistImage.lastIndexOf('.') + 1).toLowerCase();



            if(editpartylistName == '' || editpartylistImage == '' || editpartylistDescription == '' ){
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

                        if($('#editpartylistImage').val() == ''){
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
                            text: "You are updating an partylist!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, update it!'
                            }).then((result) => {
                            if (result.isConfirmed) {                         
                                // ajax post
                                            $.ajax({
                                                url: '<?php echo base_url()?>admin/partylist/update_partylist',
                                                type:"post",
                                                data: new FormData(this),
                                                processData:false,
                                                contentType:false,

                                                success:function()
                                                        {
                                                        
                                                        refresh();
                                                    
                                                        Swal.fire({
                                                            title: 'Success!',
                                                            text: 'You successfully updated an partylist.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Ok'
                                                            })
                                                        
                                                        $('#editpartylistModal').modal('hide');
                                                        $('#editpartylistModal form')[0].reset();
                                                            
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
    // End of updating partylist


    // Load vote logs table
    function load_ep_votes(){
            var electionID = "<?php echo $data[0]->id ?>"
            
            electionDataTable = $('#election_vote_table').DataTable( {
                "pageLength": 10,
                "ajax": "<?php echo base_url()?>admin/reports/get_specific_votes/"+electionID+"/t_ep",
                "columns": [
                    { data: "id"},
                    { data: "candidateName"},
                    { data: "voterName"},
                    { data: "userStudentNo"},
                    { data: "userCourse"},
                    { data: "voteDateCreated"},
                ],
                
                "aoColumnDefs": [{"bVisible": false, "aTargets": [0]}],
                "order": [[0, "desc"]]

            })
        }

        load_ep_votes()
        // End of loadtable


});
</script>

</html>