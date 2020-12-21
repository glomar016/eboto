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

    <!-- Election Data -->
    <?php
        if($table['tableName'] == 't_candidate'){ ?>
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
                                    <input type="checkbox" id="<?php echo $row->id ?>" value="<?php echo $row->id ?>">
                                    <label for="<?php echo $row->id ?>"><strong>Select this candidate</strong></label>
                                </li>
                            </ul>                        
                            </div>
                        </div>
                    </div>
                <?php } ?>
                
            <!-- End Election HTML Display-->
    <?php } ?>
    <!-- End of election data -->


    <!-- Contest Data -->
    <?php
        if($table['tableName'] == 't_contest'){ ?>
            <div>
            
            </div>
    <?php } ?>
    <!-- End of contest data -->


    <!-- Poll Data -->
    <?php
        if($table['tableName'] == 't_poll'){ ?>
            <div>
            
            </div>
    <?php } ?>
    <!-- End of poll data -->

        </div>
        </div>
    </section>
    <!-- Portfolio Section End -->


    <!-- FOOTER DESKTOP-->
    <?php $this->load->view('includes/userfooter.php'); ?>
    <!-- FOOTER DESKTOP-->
    

    <!-- Js Plugins -->
    <script src="<?php echo base_url()?>resources/js/jquery-3.3.1.min.js"></script>
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



    // Voting
    $(document).on("click", ".btn_vote_election", function(){
        var id = this.value;
        var tableName = "t_election";

        // ajax call
        var form = $('#addelectionForm');                                
                                // ajax post
                                $.ajax({
                                    url: '<?php echo base_url()?>user/vote/view',
                                    type: 'post',
                                    data: {id: id, tableName: tableName},

                                    success:function()
                                            {
                                            
                                            }
                                });
                                // end of ajax call
    });
});
// End of script

</script>

</html>