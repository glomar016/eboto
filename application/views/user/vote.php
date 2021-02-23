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
    <div class="breadcrumb-option spad set-bg" style="padding-bottom:50px" data-setbg="<?php echo base_url()?>resources/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vote</h2>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url()?>home">Home</a>
                            <span>List</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio spad"  style="padding-top: 50px;">
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
                            <div style="margin: auto;
                                        border-radius: 50%;
                                        height: 180px;
                                        width: 180px;"
                            class="team__item set-bg set-bg" data-setbg="<?php echo base_url('resources/images/'.$row->orgLogo); ?>">
                            </div>
                            <br>
                            <div class="portfolio__item__text">

                                <!-- Live Clock -->
                                <div >
                                        <h3 style=color:black; class="fa fa-clock-o"> Voting Ends in: 
                                            <p 
                                            style=" color:red;
                                                    font-family: 'Times New Roman', Times, serif;text-align:center;" 
                                            id="<?php echo "liveclock_election".$row->id ?>">
                                            </p>
                                        </h3> 
                                </div>  
                                <br>
                                <h4><?php echo $row->electionName ?></h4>
                                    <span><?php echo $row->orgName ?> / Election</span>
                                    <div style="padding:10px;">
                                                <button id = <?php echo 'btn_election'.$row->id ?> class=''
                                                    value='<?php echo $row->id?>'
                                                    type='button'>
                                                </button>
                                    </div>

                                    <!-- Script for live clock -->
                                <script>
                                    var dateEnd_<?php echo $row->id ?> = "<?php echo $row->electionDateEnd ?>";

                                        var election_clock_<?php echo $row->id ?> = document.getElementById('<?php echo "liveclock_election".$row->id ?>');
                                                setInterval(() => {
                                                    // clock.textContent 

                                                    if(moment().diff("<?php echo $row->electionDateEnd ?>", 'hours') > 0){
                                                        election_clock_<?php echo $row->id ?>.textContent = "Already ended."
                                                    }
                                                    else{
                                                        election_clock_<?php echo $row->id ?>.textContent = moment(dateEnd_<?php echo $row->id ?>).endOf('seconds').fromNow();
                                                    }
                                        }, 100);

                                        // check if already voted function
                                            var userId = <?php echo $userId ?>;
                                            var tableId = <?php echo $row->id ?>;
                                            var refTableName = 'vote_electionID';
                                            var tableName = 't_vote_candidate';

                                            $.ajax({
                                                url: '<?php echo base_url()?>user/vote/already_voted/'+userId+'/'+tableId+'/'+refTableName+'/'+tableName,
                                                type: "GET",
                                                // dataType: "JSON",

                                                    success:function(data){
                                                        if(data == 1 || moment().diff("<?php echo $row->electionDateEnd ?>", 'hours') > 0){
                                                            document.getElementById('<?php echo "btn_election".$row->id?>').classList.add('btn', 'btn-success', 'btn_view_election');
                                                            document.getElementById('<?php echo "btn_election".$row->id?>').textContent = "Live Result";
                                                        }
                                                        else{
                                                            document.getElementById('<?php echo "btn_election".$row->id?>').classList.add('btn', 'btn-primary', 'btn_vote_election');
                                                            document.getElementById('<?php echo "btn_election".$row->id?>').textContent = "Vote";
                                                        }
                                                    }
                                                    // End of success function
                                            })
                                            // End of ajax
                                        
                                </script>
                                    <!-- End of Script for live clock -->
                                <!-- End of Live Clock -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <!-- End of Election Data -->

            <!-- EP Data -->
            <?php foreach($ep as $row){ ?>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6 mix election">
                        <div class="portfolio__item">
                            <div style="margin: auto;
                                        border-radius: 50%;
                                        height: 180px;
                                        width: 180px;"
                            class="team__item set-bg set-bg" data-setbg="<?php echo base_url('resources/images/'.$row->orgLogo); ?>">
                            </div>
                            <br>
                            <div class="portfolio__item__text">

                                <!-- Live Clock -->
                                <div >
                                        <h3 style=color:black; class="fa fa-clock-o"> Voting Ends in: 
                                            <p 
                                            style=" color:red;
                                                    font-family: 'Times New Roman', Times, serif;text-align:center;" 
                                            id="<?php echo "liveclock_election".$row->id ?>">
                                            </p>
                                        </h3> 
                                </div>  
                                <br>
                                <h4><?php echo $row->epName ?></h4>
                                    <span><?php echo $row->orgName ?> / Election</span>
                                    <div style="padding:10px;">
                                                <button id = <?php echo 'btn_ep'.$row->id ?> class=''
                                                    value='<?php echo $row->id?>'
                                                    type='button'>
                                                </button>
                                    </div>

                                    <!-- Script for live clock -->
                                <script>
                                    var dateEnd_<?php echo $row->id ?> = "<?php echo $row->epDateEnd ?>";

                                        var ep_clock_<?php echo $row->id ?> = document.getElementById('<?php echo "liveclock_election".$row->id ?>');
                                                setInterval(() => {
                                                    // clock.textContent 

                                                    if(moment().diff("<?php echo $row->epDateEnd ?>", 'hours') > 0){
                                                        ep_clock_<?php echo $row->id ?>.textContent = "Already ended."
                                                    }
                                                    else{
                                                        ep_clock_<?php echo $row->id ?>.textContent = moment(dateEnd_<?php echo $row->id ?>).endOf('seconds').fromNow();
                                                    }
                                        }, 100);

                                        // check if already voted function
                                            var userId = <?php echo $userId ?>;
                                            var tableId = <?php echo $row->id ?>;
                                            var refTableName = 'vote_epID';
                                            var tableName = 't_vote_ep_candidate';

                                            $.ajax({
                                                url: '<?php echo base_url()?>user/vote/already_voted/'+userId+'/'+tableId+'/'+refTableName+'/'+tableName,
                                                type: "GET",
                                                // dataType: "JSON",

                                                    success:function(data){
                                                        if(data == 1 || moment().diff("<?php echo $row->epDateEnd ?>", 'hours') > 0){
                                                            document.getElementById('<?php echo "btn_ep".$row->id?>').classList.add('btn', 'btn-success', 'btn_view_ep');
                                                            document.getElementById('<?php echo "btn_ep".$row->id?>').textContent = "Live Result";
                                                        }
                                                        else{
                                                            document.getElementById('<?php echo "btn_ep".$row->id?>').classList.add('btn', 'btn-primary', 'btn_vote_ep');
                                                            document.getElementById('<?php echo "btn_ep".$row->id?>').textContent = "Vote";
                                                        }
                                                    }
                                                    // End of success function
                                            })
                                            // End of ajax
                                        
                                </script>
                                    <!-- End of Script for live clock -->
                                <!-- End of Live Clock -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <!-- End of EP Data -->

            <!-- contest Data -->
            <?php foreach($contest as $row){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix contest">
                        <div class="portfolio__item">
                            <div style="margin: auto;
                                        border-radius: 50%;
                                        height: 180px;
                                        width: 180px;"
                            class="team__item set-bg set-bg" data-setbg="<?php echo base_url('resources/images/'.$row->orgLogo); ?>">
                            </div>
                            <br>
                            <div class="portfolio__item__text">

                                <!-- Live Clock -->
                                <div >
                                        <h3 style=color:black; class="fa fa-clock-o"> Voting Ends in: 
                                            <p 
                                            style=" color:red;
                                                    font-family: 'Times New Roman', Times, serif;text-align:center;" 
                                            id="<?php echo "liveclock_contest".$row->id ?>">
                                            </p>
                                        </h3> 
                                </div>  
                                <br>
                                <h4><?php echo $row->contestName ?></h4>
                                    <span><?php echo $row->orgName ?> / Contest</span>
                                    <div style="padding:10px;">
                                                <button id = <?php echo 'btn_contest'.$row->id ?> class=''
                                                    value='<?php echo $row->id?>'
                                                    type='button'>
                                                </button>
                                    </div>

                                <!-- Script for live clock -->
                                <script>
                                        var dateEnd_<?php echo $row->id ?> = "<?php echo $row->contestDateEnd ?>";

                                        var contest_clock_<?php echo $row->id ?> = document.getElementById('<?php echo "liveclock_contest".$row->id ?>');
                                                setInterval(() => {
                                                    // clock.textContent 
                                                    contest_clock_<?php echo $row->id ?>.textContent = moment(dateEnd_<?php echo $row->id ?>).endOf('seconds').fromNow();
                                        }, 100);

                                        // check if already voted function
                                            var userId = <?php echo $userId ?>;
                                            var tableId = <?php echo $row->id ?>;
                                            var refTableName = 'vote_contestID';
                                            var tableName = 't_vote_contestant';

                                            $.ajax({
                                                url: '<?php echo base_url()?>user/vote/already_voted/'+userId+'/'+tableId+'/'+refTableName+'/'+tableName,
                                                type: "GET",
                                                // dataType: "JSON",

                                                    success:function(data){
                                                        if(data == 1){
                                                            document.getElementById('<?php echo "btn_contest".$row->id?>').classList.add('btn', 'btn-success', 'btn_view_contest');
                                                            document.getElementById('<?php echo "btn_contest".$row->id?>').textContent = "Live Result";
                                                        }
                                                        else{
                                                            document.getElementById('<?php echo "btn_contest".$row->id?>').classList.add('btn', 'btn-primary', 'btn_vote_contest');
                                                            document.getElementById('<?php echo "btn_contest".$row->id?>').textContent = "Vote";
                                                        }
                                                    }
                                                    // End of success function
                                            })
                                            // End of ajax
                                        
                                </script>
                                    <!-- End of Script for live clock -->
                                <!-- End of Live Clock -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <!-- End of contest Data -->

            <!-- poll Data -->
            <?php foreach($poll as $row){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mix poll">
                        <div class="portfolio__item">
                            <div style="margin: auto;
                                        border-radius: 50%;
                                        height: 180px;
                                        width: 180px;"
                            class="team__item set-bg set-bg" data-setbg="<?php echo base_url('resources/images/'.$row->orgLogo); ?>">
                            </div>
                            <br>
                            <div class="portfolio__item__text">

                                <!-- Live Clock -->
                                <div >
                                        <h3 style=color:black; class="fa fa-clock-o"> Voting Ends in: 
                                            <p 
                                            style=" color:red;
                                                    font-family: 'Times New Roman', Times, serif;text-align:center;" 
                                            id="<?php echo "liveclock_poll".$row->id ?>">
                                            </p>
                                        </h3> 
                                </div>  
                                <br>
                                <h4><?php echo $row->pollName ?></h4>
                                    <span><?php echo $row->orgName ?> / Poll</span>
                                    <div style="padding:10px;">
                                                <button id = <?php echo 'btn_poll'.$row->id ?> class=''
                                                    value='<?php echo $row->id?>'
                                                    type='button'>
                                                </button>
                                    </div>

                                <!-- Script for live clock -->
                                <script>
                                        var dateEnd_<?php echo $row->id ?> = "<?php echo $row->pollDateEnd ?>";

                                        var poll_clock_<?php echo $row->id ?> = document.getElementById('<?php echo "liveclock_poll".$row->id ?>');
                                                setInterval(() => {
                                                    // clock.textContent 
                                                    poll_clock_<?php echo $row->id ?>.textContent = moment(dateEnd_<?php echo $row->id ?>).endOf('seconds').fromNow();
                                        }, 100);

                                        // check if already voted function
                                        var userId = <?php echo $userId ?>;
                                            var tableId = <?php echo $row->id ?>;
                                            var refTableName = 'vote_pollID';
                                            var tableName = 't_vote_option';

                                            $.ajax({
                                                url: '<?php echo base_url()?>user/vote/already_voted/'+userId+'/'+tableId+'/'+refTableName+'/'+tableName,
                                                type: "GET",
                                                // dataType: "JSON",

                                                    success:function(data){
                                                        if(data == 1){
                                                            document.getElementById('<?php echo "btn_poll".$row->id?>').classList.add('btn', 'btn-success', 'btn_view_poll');
                                                            document.getElementById('<?php echo "btn_poll".$row->id?>').textContent = "Live Result";
                                                        }
                                                        else{
                                                            document.getElementById('<?php echo "btn_poll".$row->id?>').classList.add('btn', 'btn-primary', 'btn_vote_poll');
                                                            document.getElementById('<?php echo "btn_poll".$row->id?>').textContent = "Vote";
                                                        }
                                                    }
                                                    // End of success function
                                            })
                                            // End of ajax
                                        
                                </script>
                                    <!-- End of Script for live clock -->
                                <!-- End of Live Clock -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <!-- End of poll Data -->
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
            var refTableName = "t_election";
        

            window.location.href = "<?php echo base_url()?>user/vote/view/"+id+"/"+tableName+"/"+refColumn+"/"+columnStatus+"/"+refTableName;
        });

        // Voting in ep
        $(document).on("click", ".btn_vote_ep", function(){
            var id = this.value;
            var tableName = "t_candidate";
            var refColumn = "candidateEpID";
            var columnStatus = "candidateStatus";
            var refTableName = "t_ep";
        

            window.location.href = "<?php echo base_url()?>user/vote/view_ep/"+id+"/"+tableName+"/"+refColumn+"/"+columnStatus+"/"+refTableName;
        }); 


        // Voting in contest
        $(document).on("click", ".btn_vote_contest", function(){
            var id = this.value;
            var tableName = "t_contestant";
            var refColumn = "contestantContestID";
            var columnStatus = "contestantStatus";
            var refTableName = "t_contest";

            window.location.href = "<?php echo base_url()?>user/vote/view/"+id+"/"+tableName+"/"+refColumn+"/"+columnStatus+"/"+refTableName;
        });

        // Voting in poll
        $(document).on("click", ".btn_vote_poll", function(){
            var id = this.value;
            var tableName = "t_option";
            var refColumn = "optionPollID";
            var columnStatus = "optionStatus";
            var refTableName = "t_poll";

            window.location.href = "<?php echo base_url()?>user/vote/view/"+id+"/"+tableName+"/"+refColumn+"/"+columnStatus+"/"+refTableName;
        });
    // End of viewing

    // Viewing Result
        // Voting in election
        $(document).on("click", ".btn_view_election", function(){
            var refTableID = this.value;
            var tableName = "t_candidate";
        

            window.location.href = "<?php echo base_url()?>user/progress/index/"+refTableID+"/"+tableName;
        });

        // Voting in EP
        $(document).on("click", ".btn_view_ep", function(){
            var refTableID = this.value;
            var tableName = "t_ep";
        

            window.location.href = "<?php echo base_url()?>user/progress/index/"+refTableID+"/"+tableName;
        });

        // Voting in contest
        $(document).on("click", ".btn_view_contest", function(){
            var refTableID = this.value;
            var tableName = "t_contestant";


            window.location.href = "<?php echo base_url()?>user/progress/index/"+refTableID+"/"+tableName;
        });

        // Voting in poll
        $(document).on("click", ".btn_view_poll", function(){
            var refTableID = this.value;
            var tableName = "t_option";

            window.location.href = "<?php echo base_url()?>user/progress/index/"+refTableID+"/"+tableName;
        });
    // End of viewing result


});
// End of script

</script>

</html>