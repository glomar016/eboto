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
    <title>Forgot password</title>

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
                            <a href="<?php echo base_url()?>">
                                <img src="<?php echo base_url()?>resources/images/icon/eLogoFont.png" alt="E-Boto">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" name="forgot_pass_form" id="forgot_pass_form" method="post">
                                <div class="form-group">
                                    <label>Student No</label> 
                                    <input class="au-input au-input--full" type="text" name="studentNumber" id="studentNumber" placeholder="Student Number">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label> 
                                    
                                    <input class="au-input au-input--full" type="email" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="text-right">
                                    <label>
                                        <a href="<?php echo base_url()?>user/login">Already have an account?</a>
                                    </label>
                                </div>
                                    <input class="btn btn-success btn-lg btn-block" id="btn_sendmail"  name="btn_sendmail" type="submit">
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
$('#forgot_pass_form').on('submit', function(e){
    e.preventDefault();
    $("#btn_sendmail").val("Please Wait...").attr("disabled", true);

    var studentNumber = document.forgot_pass_form.studentNumber.value;
    var email = document.forgot_pass_form.email.value;

    var form = $('#forgot_pass_form');                                
    // ajax post
    $.ajax({
        url: '<?php echo base_url()?>user/forgotten/check_exist',
        type: 'post',
        data: form.serialize(),

            success: function(data){
                if(data == 1){
                    // ajax send mail
                            $.ajax({
                                url: '<?php echo base_url()?>user/forgotten/send_mail',
                                type: 'post',
                                data: form.serialize(),

                                    success: function(){Swal.fire({
                                        title: 'Success!',
                                        text: 'Please check your mail.',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                        }).then((result) => {
                                                $("#btn_sendmail").val("Submit").attr("disabled", false);
                                                $('#forgot_pass_form')[0].reset();
                                        })
                                        // End of Swal
                                    }
                            })
                    // end of ajax mail
                    
                }
                else{
                    Swal.fire({
                    title: 'Warning!',
                    text: 'Record does not exist. Check if your student number and email correct.',
                    icon: 'warning',
                    confirmButtonText: 'Ok'
                    }).then((result) => {
                            $('#forgot_pass_form')[0].reset();
                            $("#btn_sendmail").val("Submit").attr("disabled", false);
                    })
                }

                
                }
            // End of success function
    })
    // End of ajax post
})

</script>

</html>
<!-- end document-->