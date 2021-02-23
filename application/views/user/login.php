<?php 
    if (isset($this->session->userdata['logged_in'])) {
        header("location: ".base_url()."user/login/submit");
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
    <title>Login</title>

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url()?>resources/images/icon/eLogoFont.png" alt="E-Boto">
                            </a>
                        </div>
                    
                        <div class="login-form">
                            <form action="" id="login_form" name="login_form" method="post">
                                <div class="form-group">
                                    <label>Student Number</label>
                                    <input class="au-input au-input--full" type="text" name="userStudentNo" placeholder="Student Number">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="userPassword" placeholder="Password">
                                </div>
                                <div class="login-checkbox float-right">
                                    <label>
                                        <a href="<?php echo base_url()?>user/forgotten">Forgotten Password?</a>
                                    </label>
                                </div>
                                <div>
                                    <input class="btn btn-success btn-lg btn-block" id="btn_login" value="Sign In" name="btn_login" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
$('#login_form').on('submit', function(e){
    e.preventDefault();
    $("#btn_login").val("Logging in...").attr("disabled", true);

    var studentNumber = document.login_form.userStudentNo.value;
    var password = document.login_form.userPassword.value;


    if(studentNumber == "" && password == ""){
        Swal.fire({
                    title: 'Failed!',
                    text: 'Invalid Student Number and Password.',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                    }).then((result) => {
                            $("#btn_login").val("Submit").attr("disabled", false);
                            $('#login_form')[0].reset();
                    })
                    $("#btn_login").val("Submit").attr("disabled", false);
                    $('#login_form')[0].reset();
    }
    else{
        var form = $('#login_form');                                
        // ajax post
        $.ajax({
            url: '<?php echo base_url()?>user/login/submit',
            type: 'post',
            data: form.serialize(),

                success: function(data){
                        var data = jQuery.parseJSON(data)
                        if(data.result == 'Error'){
                            Swal.fire({
                            title: 'Failed!',
                            text: 'Invalid Student Number and Password.',
                            icon: 'error',
                            confirmButtonText: 'Ok'
                            }).then((result) => {
                                    $("#btn_login").val("Submit").attr("disabled", false);
                                    $('#login_form')[0].reset();
                            })
                            // End of Swal
                        }
                        else if(data.result == 'Success' && data.userType == 'User'){
                            window.location.href = "<?php echo base_url()?>user/vote";
                        }
                        else if(data.result == 'Success' && data.userType == 'Admin'){
                            window.location.href = "<?php echo base_url()?>admin/dashboard";
                        }
                    
                    }
                // End of success function
        })
        // End of ajax post
    }
    
})


</script>

</html>
<!-- end document-->