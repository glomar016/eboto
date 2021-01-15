<!-- Header Section Begin -->
<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>resources/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li <?php if($this->router->fetch_class() == 'home' || $this->router->fetch_class() == 'eboto') {?> class="active has-sub" <?php } ?>>
                                    <a style="color:white;" href="<?php echo base_url()?>home">Home</a>
                                </li>
                                <li <?php if($this->router->fetch_class() == 'vote') {?> class="active has-sub" <?php } ?>>
                                    <a style="color:white;" href="<?php echo base_url()?>user/vote">Vote Now</a>
                                </li>
                                <li <?php if($this->router->fetch_class() == 'profile') {?> class="active has-sub" <?php } ?>>
                                    <a style="color:white;" href="<?php echo base_url()?>user/profile">Profile</a>
                                </li>
                                <li <?php if($this->router->fetch_class() == 'logout') {?> class="active has-sub" <?php } ?>>
                                    <a style="color:white;" href="<?php echo base_url()?>user/logout">Logout</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->