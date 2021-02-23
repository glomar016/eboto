<?php
$refTableID = $this->uri->segment(4);
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
                        <h2>Result</h2>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url()?>home">Home</a>
                            <a href="<?php echo base_url()?>user/vote">Vote</a>
                            <span>Result</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Start -->
    <section class="portfolio spad" style="padding-top: 20px;">
        <div class="container">

            <!-- Ref Info -->
                <!-- Election Info -->
                <?php if($tableName == 't_candidate'){ ?>
                    <!-- <h2 style="text-align:center; color:black;">Election</h2> -->
                    <div class="d-flex justify-content-between breadcrumb__text" style="padding-right:50px;">
                            <div class="w-50 p-3">
                                <h1 style="color:black;white-space:pre-wrap;"><?php echo $refInfo[0]->electionName?>
                                <br><br><p style=color:black;><?php echo $refInfo[0]->electionDescription?><p></h2>
                            </div>
                            <!-- Live Clock -->
                            <div style="padding-top:25px" class="text-center">
                                <h4 style=color:black; class="fa fa-clock-o"> Voting Ends in: 
                                    <p style=" color:red;" id="liveclock">
                                    </p>
                                </h4> 
                            </div>
                                <!-- Script for live clock -->
                                <script>
                                        var dateEnd = "<?php echo $refInfo[0]->electionDateEnd?>";

                                        var clock = document.getElementById('liveclock');
                                                setInterval(() => {
                                                    // clock.textContent 
                                                    clock.textContent = moment(dateEnd).endOf('seconds').fromNow();
                                        }, 100);
                                </script>
                                <!-- End of Script for live clock -->
                            <!-- End of Live Clock -->
                    </div>
                <?php } ?>
                <!-- End of election info -->

                <!-- EP Info -->
                <?php if($tableName == 't_ep'){ ?>
                    <!-- <h2 style="text-align:center; color:black;">Election</h2> -->
                    <div class="d-flex justify-content-between breadcrumb__text" style="padding-right:50px;">
                            <div class="w-50 p-3">
                                <h1 style="color:black;white-space:pre-wrap;"><?php echo $refInfo[0]->epName?>
                                <br><br><p style=color:black;><?php echo $refInfo[0]->epDescription?><p></h2>
                            </div>
                            <!-- Live Clock -->
                            <div style="padding-top:25px" class="text-center">
                                <h4 style=color:black; class="fa fa-clock-o"> Voting Ends in: 
                                    <p style=" color:red;" id="liveclock">
                                    </p>
                                </h4> 
                            </div>
                                <!-- Script for live clock -->
                                <script>
                                        var dateEnd = "<?php echo $refInfo[0]->epDateEnd?>";

                                        var clock = document.getElementById('liveclock');
                                                setInterval(() => {
                                                    // clock.textContent 
                                                    clock.textContent = moment(dateEnd).endOf('seconds').fromNow();
                                        }, 100);
                                </script>
                                <!-- End of Script for live clock -->
                            <!-- End of Live Clock -->
                    </div>
                <?php } ?>
                <!-- End of EP info -->

                <!-- Contest Info -->
                <?php if($tableName == 't_contestant'){ ?>
                    <!-- <h2 style="text-align:center; color:black;">Contest</h2> -->
                    <div class="d-flex justify-content-between breadcrumb__text" style="padding-right:100px; padding-left:50px">
                            <div class="w-50 p-3">
                                <h1 style="color:black;white-space:pre-wrap;"><?php echo $refInfo[0]->contestName?>
                                <br><br><p style=color:black;><?php echo $refInfo[0]->contestDescription?><p></h2>
                            </div>
                            <!-- Live Clock -->
                            <div style="padding-top:25px" class="text-center">
                                <h4 style=color:black; class="fa fa-clock-o"> Voting Ends in: 
                                    <p style=" color:red;" id="liveclock">
                                    </p>
                                </h4> 
                            </div>
                                <!-- Script for live clock -->
                                <script>
                                        var dateEnd = "<?php echo $refInfo[0]->contestDateEnd?>";

                                        var clock = document.getElementById('liveclock');
                                                setInterval(() => {
                                                    // clock.textContent 
                                                    clock.textContent = moment(dateEnd).endOf('seconds').fromNow();
                                        }, 100);
                                </script>
                                <!-- End of Script for live clock -->
                            <!-- End of Live Clock -->
                    </div>
                <?php } ?>
                <!-- End of contest info -->

                <!-- Poll Info -->
                <?php if($tableName == 't_option'){ ?>
                    <!-- <h2 style="text-align:center; color:black;">Poll</h2> -->
                    <div class="d-flex justify-content-between breadcrumb__text" style="padding-right:100px; padding-left:50px">
                                <div class="w-50 p-3">
                                    <h1 style="color:black;white-space:pre-wrap;"><?php echo $refInfo[0]->pollName?>
                                    <br><br><p style=color:black;><?php echo $refInfo[0]->pollDescription?><p></h2>
                                </div>
                            <!-- Live Clock -->
                            <div style="padding-top:25px" class="text-center">
                                <h4 style=color:black; class="fa fa-clock-o"> Voting Ends in: 
                                    <p style=" color:red;" id="liveclock">
                                    </p>
                                </h4> 
                            </div>
                                <!-- Script for live clock -->
                                <script>
                                        var dateEnd = "<?php echo $refInfo[0]->pollDateEnd?>";

                                        var clock = document.getElementById('liveclock');
                                                setInterval(() => {
                                                    // clock.textContent 
                                                    clock.textContent = moment(dateEnd).endOf('seconds').fromNow();
                                        }, 100);
                                </script>
                                <!-- End of Script for live clock -->
                            <!-- End of Live Clock -->
                    </div>
                <?php } ?>
                <br>
                <!-- End of Poll info -->

            <!-- End of Ref Info -->


    <!-- MAIN CONTENT -->

    <!-- Candidate Live Tally -->
    <?php if($tableName == 't_candidate'){ ?>
        <div class="card col-lg-12 col-md-6 col-sm-6 d-flex justify-content-center align-self-stretch" style="background-color:#00295e">
            <div class="card-header" style="background-color:#00295e">
                <h2 style="color:white" class="text-center">Voting Live Tally</h2>
            </div>
            <div class="candidateList">
            
            </div>

            <script>
                setInterval(() => {
                    $.ajax({
                        url: '<?php echo base_url() ?>user/progress/get_votes/'+'<?php echo $tableName.'/'.$refTableID;?>',
                        type: 'GET',
                        datatype: 'JSON',

                        success:function(data){
                            var data = jQuery.parseJSON(data)
                            var div = "";

                            for(var i= 0; i < data['data'].length; i++){
                                div += `<div class="card-body" id="candidate_votes${data['data'][i].id}">
                                            </div>`
                            }
                            $('.candidateList').html(div)

                            for(var i=0; i < data['data'].length; i++){
                                var div_id = 'candidate_votes'+(data['data'][i].id);

                                document.getElementById(div_id).innerHTML = `
                                    <h6 style="color:white">${data['data'][i].candidateName} - ${data['data'][i].candidatePosition}</h6>
                                        <div class="progress mb-2" >
                                            <div class="progress-bar bg-info progress-bar progress-bar-animated" role="progressbar" 
                                            style="width: ${data['data'][i].vote_percentage}%" aria-valuenow="${data['data'][i].vote_counts}"
                                            aria-valuemin="0">${data['data'][i].vote_counts}
                                        </div>`
                                
                            }
                        }
                    })
                }, 100); 
            </script>
        </div>
    <?php } ?>
    <!-- End of Candidate Live Tally -->

    <!-- Candidate Live Tally -->
    <?php if($tableName == 't_ep'){ ?>
        <div class="card col-lg-12 col-md-6 col-sm-6 d-flex justify-content-center align-self-stretch" style="background-color:#00295e">
            <div class="card-header" style="background-color:#00295e">
                <h2 style="color:white" class="text-center">Voting Live Tally</h2>
            </div>
            <div class="epCandidateList">
            
            </div>

            <script>
                setInterval(() => {
                    $.ajax({
                        url: '<?php echo base_url() ?>user/progress/get_votes/'+'<?php echo $tableName.'/'.$refTableID;?>',
                        type: 'GET',
                        datatype: 'JSON',

                        success:function(data){
                            var data = jQuery.parseJSON(data)
                            var div = "";

                            for(var i= 0; i < data['data'].length; i++){
                                div += `<div class="card-body" id="ep_candidate_votes${data['data'][i].id}">
                                            </div>`
                            }
                            $('.epCandidateList').html(div)

                            for(var i=0; i < data['data'].length; i++){
                                var div_id = 'ep_candidate_votes'+(data['data'][i].id);

                                document.getElementById(div_id).innerHTML = `
                                    <h6 style="color:white">${data['data'][i].candidateName} - ${data['data'][i].candidatePosition}</h6>
                                        <div class="progress mb-2" >
                                            <div class="progress-bar bg-info progress-bar progress-bar-animated" role="progressbar" 
                                            style="width: ${data['data'][i].vote_percentage}%" aria-valuenow="${data['data'][i].vote_counts}"
                                            aria-valuemin="0">${data['data'][i].vote_counts}
                                        </div>`
                                
                            }
                        }
                    })
                }, 100); 
            </script>
        </div>
    <?php } ?>
    <!-- End of Candidate Live Tally -->

    <!-- Contestant Live Tally -->
    <?php if($tableName == 't_contestant'){ ?>
        <div class="card col-lg-12 col-md-6 col-sm-6 d-flex justify-content-center align-self-stretch" style="background-color:#00295e">
            <div class="card-header" style="background-color:#00295e">
                <h2 style="color:white" class="text-center">Voting Live Tally</h2>
            </div>
            <div class="contestantList">
            
            </div>

            <script>
                setInterval(() => {
                    $.ajax({
                        url: '<?php echo base_url() ?>user/progress/get_votes/'+'<?php echo $tableName.'/'.$refTableID;?>',
                        type: 'GET',
                        datatype: 'JSON',

                        success:function(data){
                            var data = jQuery.parseJSON(data)
                            var div = "";

                            for(var i= 0; i < data['data'].length; i++){
                                div += `<div class="card-body" id="contestant_votes${data['data'][i].id}">
                                            </div>`
                            }
                            $('.contestantList').html(div)

                            for(var i=0; i < data['data'].length; i++){
                                var div_id = 'contestant_votes'+(data['data'][i].id);

                                document.getElementById(div_id).innerHTML = `
                                    <h6 style="color:white">${data['data'][i].contestantName}</h6>
                                        <div class="progress mb-2" >
                                            <div class="progress-bar bg-info progress-bar progress-bar-animated" role="progressbar" 
                                            style="width: ${data['data'][i].vote_percentage}%" aria-valuenow="${data['data'][i].vote_counts}"
                                            aria-valuemin="0">${data['data'][i].vote_counts}
                                        </div>`
                                
                            }
                        }
                    })
                }, 100); 
            </script>
        </div>
    <?php } ?>
    <!-- End of Contestant Live Tally -->

    <!-- Option Live Tally -->
    <?php if($tableName == 't_option'){ ?>
        <div class="card col-lg-12 col-md-6 col-sm-6 d-flex justify-content-center align-self-stretch" style="background-color:#00295e">
            <div class="card-header" style="background-color:#00295e">
                <h2 style="color:white" class="text-center">Voting Live Tally</h2>
            </div>
            <div class="optionList">
            
            </div>

            <script>
                setInterval(() => {
                    $.ajax({
                        url: '<?php echo base_url() ?>user/progress/get_votes/'+'<?php echo $tableName.'/'.$refTableID;?>',
                        type: 'GET',
                        datatype: 'JSON',

                        success:function(data){
                            var data = jQuery.parseJSON(data)
                            var div = "";

                            for(var i= 0; i < data['data'].length; i++){
                                div += `<div class="card-body" id="option_votes${data['data'][i].id}">
                                            </div>`
                            }
                            $('.optionList').html(div)

                            for(var i=0; i < data['data'].length; i++){
                                var div_id = 'option_votes'+(data['data'][i].id);

                                document.getElementById(div_id).innerHTML = `
                                    <h6 style="color:white">${data['data'][i].optionName}</h6>
                                        <div class="progress mb-2" >
                                            <div class="progress-bar bg-info progress-bar progress-bar-animated" role="progressbar" 
                                            style="width: ${data['data'][i].vote_percentage}%" aria-valuenow="${data['data'][i].vote_counts}"
                                            aria-valuemin="0">${data['data'][i].vote_counts}
                                        </div>`
                                
                            }
                        }
                    })
                }, 100); 
            </script>
        </div>
    <?php } ?>
    <!-- End of Option Live Tally -->

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

})

</script>

</html>