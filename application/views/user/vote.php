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

    <!-- Portfolio Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".election">Election</li>
                        <li data-filter=".contest">Contest</li>
                        <li data-filter=".poll">Poll</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio__gallery">

            <!-- Election Data -->
                <?php foreach($election as $row){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix election">
                        <div class="portfolio__item">
                            <div class="team__item set-bg set-bg" data-setbg="<?php echo base_url('resources/images/'.$row->orgLogo); ?>">
                            </div>
                            <br>
                            <div class="portfolio__item__text">
                                <h4><?php echo $row->electionName ?></h4>
                                    <span><?php echo $row->orgName ?> / Election</span>
                                    <div style="padding:10px;">
                                        <button class="btn btn-outline-primary btn_vote_election" value="<?php echo $row->id?>" title="Vote" type="button">Vote</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <!-- End of Election Data -->

            <!-- Contest Data -->
                <?php foreach($contest as $row){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix contest">
                        <div class="portfolio__item">
                            <div class="team__item set-bg" data-setbg="<?php echo base_url('resources/images/'.$row->orgLogo); ?>">
                            </div>
                            <br>
                            <div class="portfolio__item__text">
                                <h4><?php echo $row->contestName ?></h4>
                                    <span><?php echo $row->orgName?> / Contest</span>
                                    <div style="padding:10px;">
                                        <button class="btn btn-outline-primary btn_vote_contest" value="<?php echo $row->id?>" title="Vote" type="button">Vote</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <!-- End of Contest Data -->

            <!-- Poll Data -->
                <?php foreach($poll as $row){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix poll">
                        <div class="portfolio__item">
                            <div class="team__item set-bg set-bg" data-setbg="<?php echo base_url('resources/images/'.$row->orgLogo); ?>">
                            </div>
                            <br>
                            <div class="portfolio__item__text">
                                <h4><?php echo $row->pollName ?></h4>
                                    <span><?php echo $row->orgName ?> / Poll</span>
                                    <div style="padding:10px;">
                                        <button class="btn btn-outline-primary btn_vote_poll" value="<?php echo $row->id?>" title="Vote" type="button">Vote</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <!-- End of Poll Data -->
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div> -->
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


    // Viewing
        // Voting in election
        $(document).on("click", ".btn_vote_election", function(){
            var id = this.value;
            var tableName = "t_candidate";
            var refColumn = "candidateElectionID";
            var columnStatus = "candidateStatus";

            window.location.href = "<?php echo base_url()?>user/vote/view/"+id+"/"+tableName+"/"+refColumn+"/"+columnStatus;
        });

        // Voting in election
        $(document).on("click", ".btn_vote_contest", function(){
            var id = this.value;
            var tableName = "t_contestant";
            var refColumn = "contestantContestID";
            var columnStatus = "contestantStatus";

            window.location.href = "<?php echo base_url()?>user/vote/view/"+id+"/"+tableName+"/"+refColumn+"/"+columnStatus;
        });

        // Voting in election
        $(document).on("click", ".btn_vote_poll", function(){
            var id = this.value;
            var tableName = "t_option";
            var refColumn = "pollOptionID";
            var columnStatus = "optionStatus";

            window.location.href = "<?php echo base_url()?>user/vote/view/"+id+"/"+tableName+"/"+refColumn+"/"+columnStatus;
        });
    // End of viewing


});
// End of script

</script>

</html>