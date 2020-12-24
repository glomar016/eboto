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

    <!-- Checkbox css -->
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/checkbox.css" type="text/css">

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

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- HEADER DESKTOP-->
    <?php $this->load->view('includes/userheader.php'); ?>
    <!-- HEADER DESKTOP-->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="<?php echo base_url()?>resources/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vote</h2>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url()?>home">Home</a>
                            <span>Vote</span>
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
            <div class="row portfolio__gallery">

    <!-- Ref Table ID -->
    <h6 id="refTableID" hidden><?php echo $refTable;?></h6>

    <!-- Election Data -->
    <?php if($table['tableName'] == 't_candidate'){ ?>
            <!-- Election HTML Display -->
            <?php foreach($data as $row){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix election">
                        <div class="portfolio__item">
                            <div class="team__item set-bg" data-setbg="<?php echo base_url('resources/images/'.$row->candidateImage); ?>">
                            </div>
                            <br>
                            <div class="portfolio__item__text">
                                <h4><?php echo $row->candidateName ?></h4>
                                    <span>Position: <?php echo $row->candidatePosition ?></span>
                                    <span style="white-space: pre-wrap;"><?php echo $row->candidateDescription ?></span>
                                <ul class="ks-cboxtags">
                                <li>
                                    <input type="checkbox" id="<?php echo $row->id ?>" name="selected_candidate" value="<?php echo $row->id ?>">
                                    <label for="<?php echo $row->id ?>"><strong>Select this candidate</strong></label>
                                </li>
                            </ul>                        
                            </div>
                        </div>
                    </div>
                <?php } ?>

            <!-- Election Submit Vote Button -->
            <div class="col-lg-12 text-center">
                <button class="btn btn-success" id="btn_vote_candidate" title="Submit Vote" type="button">Submit Vote</button>
            </div>
            <!-- End of Election Submit Vote Button -->
                
            <!-- End Election HTML Display-->
    <?php } ?>
    <!-- End of election data -->


    <!-- Contest Data -->
    <?php if($table['tableName'] == 't_contestant'){ ?>
            <!-- Contest HTML Display -->
            <?php foreach($data as $row){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix contest">
                        <div class="portfolio__item">
                            <div class="team__item set-bg" data-setbg="<?php echo base_url('resources/images/'.$row->contestantImage); ?>">
                            </div>
                            <br>
                            <div class="portfolio__item__text">
                                <h4><?php echo $row->contestantName ?></h4>
                                    <span style="white-space: pre-wrap;"><?php echo $row->contestantDescription ?></span>
                                <ul class="ks-cboxtags">
                                <li>
                                    <input type="radio" id="<?php echo $row->id ?>" name="selected_contestant"
                                     value="<?php echo $row->id ?>">
                                    <label for="<?php echo $row->id ?>"><strong>Select this contestant</strong></label>
                                </li>
                            </ul>                        
                            </div>
                        </div>
                    </div>
                <?php } ?>

            <!-- Contest Submit Vote Button -->
            <div class="col-lg-12 text-center">
                <button class="btn btn-success" id="btn_vote_contestant" title="Submit Vote" type="button">Submit Vote</button>
            </div>
            <!-- End of Contest Submit Vote Button -->
                
        <!-- End Contest HTML Display-->
    <?php } ?>
    <!-- End of Contest data -->

            
    <!-- Poll Data -->
    <?php if($table['tableName'] == 't_option'){ ?>
            <!-- Poll HTML Display -->
            <?php foreach($data as $row){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix contest">
                        <div class="portfolio__item">
                            <br>
                            <div class="portfolio__item__text">
                                <h4 style="white-space: pre-wrap;"><?php echo $row->optionName ?></h4>
                                <ul class="ks-cboxtags">
                                <li>
                                    <input type="radio" id="<?php echo $row->id ?>" name="selected_option"
                                     value="<?php echo $row->id ?>">
                                    <label for="<?php echo $row->id ?>"><strong>Select this option</strong></label>
                                </li>
                            </ul>                        
                            </div>
                        </div>
                    </div>
                <?php } ?>

            <!-- Poll Submit Vote Button -->
            <div class="col-lg-12 text-center">
                <button class="btn btn-success" id="btn_vote_option" title="Submit Vote" type="button">Submit Vote</button>
            </div>
            <!-- End of Poll Submit Vote Button -->
                
        <!-- End Poll HTML Display-->
    <?php } ?>
    <!-- End of Poll data -->

            
            


            </div>
        </div>  
    </section>
    <!-- Portfolio Section End -->


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
</body>

<script>
// Start of script
$(document).ready(function(){

    // Voting Candidate
    $(document).on("click", "#btn_vote_candidate", function(){
        $("#btn_vote_candidate").attr("disabled", true)

        var refTableID = $("#refTableID");
        var refTableID = refTableID.text();
        var selected = [];
        console.log(refTableID)
        
        // Insert selected candidate ID
        $('input[name="selected_candidate"]:checked').each(function() {
            selected.push(this.value);
        });
        console.log(selected)
                            Swal.fire({
                                title: 'Are you sure on your votes?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes!'
                                }).then((result) => {
                                    $("#btn_vote_candidate").attr("disabled", false);
                                if (result.isConfirmed) {
                                    // Ajax call
                                        $.ajax({
                                            url: '<?php echo base_url()?>user/vote/vote_candidate',
                                            type: 'post',
                                            data: {'selected': selected,
                                                    'refTableID': refTableID},

                                                        success: function(){
                                                            Swal.fire({
                                                                title: 'Success!',
                                                                text: 'You successfully voted.',
                                                                icon: 'success',
                                                                confirmButtonText: 'Ok'
                                                                }).then((result) => {
                                                                    window.location.href = "<?php echo base_url()?>user/vote";
                                                                })
                                                        }
                                        })
                                    // End of ajax call 
                                }
                        })
    });
    // End of Voting Candidate

    // Voting Contestant
    $(document).on("click", "#btn_vote_contestant", function(){
        $("#btn_vote_contestant").attr("disabled", true)

        var refTableID = $("#refTableID");
        var refTableID = refTableID.text();
        
        var selected = $('input[name="selected_contestant"]:checked').val();
        
        console.log(selected)
                            Swal.fire({
                                title: 'Are you sure on your votes?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes!'
                                }).then((result) => {
                                    $("#btn_vote_contestant").attr("disabled", false);
                                if (result.isConfirmed) {
                                    // Ajax call
                                        $.ajax({
                                            url: '<?php echo base_url()?>user/vote/vote_contestant',
                                            type: 'post',
                                            data: {'selected': selected,
                                                    'refTableID': refTableID},

                                                        success: function(){
                                                            Swal.fire({
                                                                title: 'Success!',
                                                                text: 'You successfully voted.',
                                                                icon: 'success',
                                                                confirmButtonText: 'Ok'
                                                                }).then((result) => {
                                                                    window.location.href = "<?php echo base_url()?>user/vote";
                                                                })
                                                        }
                                        })
                                    // End of ajax call 
                                }
                        })
    });
    // End of Voting Contestant


        // Voting option
        $(document).on("click", "#btn_vote_option", function(){
        $("#btn_vote_option").attr("disabled", true)

        var refTableID = $("#refTableID");
        var refTableID = refTableID.text();
        
        var selected = $('input[name="selected_option"]:checked').val();

        console.log(selected)
                            Swal.fire({
                                title: 'Are you sure on your votes?',
                                text: "You won't be able to revert this!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes!'
                                }).then((result) => {
                                    $("#btn_vote_option").attr("disabled", false);
                                if (result.isConfirmed) {
                                    // Ajax call
                                        $.ajax({
                                            url: '<?php echo base_url()?>user/vote/vote_option',
                                            type: 'post',
                                            data: {'selected': selected,
                                                    'refTableID': refTableID},

                                                        success: function(){
                                                            Swal.fire({
                                                                title: 'Success!',
                                                                text: 'You successfully voted.',
                                                                icon: 'success',
                                                                confirmButtonText: 'Ok'
                                                                }).then((result) => {
                                                                    window.location.href = "<?php echo base_url()?>user/vote";
                                                                })
                                                        }
                                        })
                                    // End of ajax call 
                                }
                        })
    });
    // End of Voting option
    
});
// End of script

</script>

</html>