<?php

    if (isset($this->session->userdata['logged_in'])) {
            $userStudentNo = ($this->session->userdata['logged_in']['userStudentNo']);
            $userId = ($this->session->userdata['logged_in']['userId']);
        } 
        else {
            header("location: ".base_url()."user/login");
    }
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Videograph Template">
    <meta name="keywords" content="Videograph, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUP | E-Boto</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/style.css" type="text/css">

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

    <!-- Checkbox css -->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/checkbox.css" type="text/css">
    


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- HEADER DESKTOP-->
    <?php $this->load->view('includes/userheader.php'); ?>
    <!-- HEADER DESKTOP-->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" style="padding-bottom: 20px;" data-setbg="<?php echo base_url()?>resources/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Profile</h2>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url()?>home">Home</a>
                            <span>Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Start -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                
            <!-- Change Email -->
            <div class="card col-sm-6">
                <div class="card-header">
                    <strong>Change</strong> Email
                </div>
                <div class="card-body card-block">
                    <form id="changeEmailForm" action="" method="post" name="changeEmailForm">
                        <div class="form-group">
                            <label for="nf-email" class=" form-control-label">Name</label>
                            <input type="text" 
                            value="<?php echo $userInfo[0]->userFirstName.' '.$userInfo[0]->userMiddleName.' '.$userInfo[0]->userLastName; ?>" 
                            name="nf-email" disabled class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nf-email" class=" form-control-label">Student Number</label>
                            <input type="text" value="<?php echo $userInfo[0]->userStudentNo; ?>" name="nf-email" disabled class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nf-email" class=" form-control-label">Email</label>
                            <input type="email" id="newEmail" value="<?php echo $userInfo[0]->userEmail; ?>" name="newEmail" placeholder="Enter Email.." class="form-control">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button id="btnChangeEmail" type="submit" class="btn btn-primary btn-sm">
                        Submit
                    </button>
                </div>
            </div>
            <!-- End of change email -->

            <!-- Change Password -->
            <div class="card col-sm-6">
                <div class="card-header">
                    <strong>Change</strong> Password
                </div>
                <div class="card-body card-block">
                    <form action="" id="changePasswordForm" name="changePasswordForm" method="post" class="">
                        <div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">Old Password</label>
                                <input type="password" id="oldPassword" name="oldPassword" placeholder="Enter Old Password.." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">New Password</label>
                                <input type="password" id="newPassword" name="newPassword" placeholder="Enter New Password.." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nf-password" class=" form-control-label">Confirm New Password</label>
                                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm New Password.." class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button id="btnChangePassword" type="submit" class="btn btn-primary btn-sm">
                        Submit
                    </button>
                </div>
            </div>
            <!-- End of change password -->
            </div>
        <div>
    </section>
    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER DESKTOP-->
    <?php $this->load->view('includes/userfooter.php'); ?>
    <!-- FOOTER DESKTOP-->
    

    <!-- Js Plugins -->
    <!-- <script src="<?php echo base_url()?>resources/js/jquery-3.3.1.min.js"></script> -->
    <script src="<?php echo base_url()?>resources/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/mixitup.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url()?>resources/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>resources/js/user-main.js"></script>

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
// Start of script
$(document).ready(function(){

    // Change Email
    $('#btnChangeEmail').on('click', function(e){
        e.preventDefault();
        $("#btnChangeEmail").attr("disabled", true);

        var newEmail = document.changeEmailForm.newEmail.value;


        if(newEmail == ''){
            Swal.fire({
                title: 'Warning!',
                text: 'Please fill out required field.',
                icon: 'warning',
                confirmButtonText: 'Ok'
                }).then((result) => {
                    $("#btnChangeEmail").attr("disabled", false);
                })
        }
        else{
            Swal.fire({
                title: 'Are you sure?',
                text: "You are updating your email!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    var form = $('#changeEmailForm'); 
                        $.ajax({
                            url: '<?php echo base_url()?>user/profile/change_email',
                            type: 'post',
                            data: form.serialize(),
                            
                                success: function(){
                                    Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully changed your email.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        }).then((result) => {
                                                $("#btnChangeEmail").attr("disabled", false);
                                                window.location.href = "<?php echo base_url()?>user/profile";
                                            })
                                    }
                                });
                            // End of ajax call
                    }
                    else{
                        $("#btnChangeEmail").attr("disabled", false);
                    }
                        
                })
            }
    })
    // End of change email

    // Change Password
        $('#btnChangePassword').on('click', function(e){
            e.preventDefault()
            $("#btnChangePassword").attr("disabled", true);

            var oldPassword = document.changePasswordForm.oldPassword.value;
            var newPassword = document.changePasswordForm.newPassword.value;
            var confirmPassword = document.changePasswordForm.confirmPassword.value;

            var userPassword = "<?php echo $userInfo[0]->userPassword; ?>"

            if(oldPassword == '' || newPassword == '' || confirmPassword == ''){
                Swal.fire({
                    title: 'Warning!',
                    text: 'Please fill out required field.',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                    }).then((result) => {
                        $("#btnChangePassword").attr("disabled", false);
                    })
            }
            else if(oldPassword != userPassword){
                Swal.fire({
                    title: 'Warning!',
                    text: 'Old password does not match!',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                    }).then((result) => {
                        $("#btnChangePassword").attr("disabled", false);
                    })
            }

            else if(newPassword != confirmPassword){
                Swal.fire({
                    title: 'Warning!',
                    text: 'New password does not match!',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                    }).then((result) => {
                        $("#btnChangePassword").attr("disabled", false);
                    })
            }
            else{
                Swal.fire({
                title: 'Are you sure?',
                text: "You are updating your password!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    var form = $('#changePasswordForm'); 
                        $.ajax({
                            url: '<?php echo base_url()?>user/profile/change_password',
                            type: 'post',
                            data: form.serialize(),
                            
                                success: function(){
                                    Swal.fire({
                                        title: 'Success!',
                                        text: 'You successfully changed your password.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        }).then((result) => {
                                                $("#btnChangePassword").attr("disabled", false);
                                                window.location.href = "<?php echo base_url()?>user/profile";
                                            })
                                    }
                                });
                            // End of ajax call
                    }
                    else{
                        $("#btnChangePassword").attr("disabled", false);
                    }
                        
                })
            }







        })
    // End of change password

})

</script>

</html>