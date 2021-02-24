<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?php echo base_url()?>">
                    <img src="<?php echo base_url()?>resources/images/icon/eLogoFont.png" alt="PUP E-Boto" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li <?php if($this->router->fetch_class() == 'home' || $this->router->fetch_class() == 'eboto') {?> class="active has-sub" <?php } ?>>
                            <a class="js-arrow" href="<?php echo base_url()?>home">
                                <i class="fas fa-home"></i>Home</a>
                        </li>
                        <li <?php if($this->router->fetch_class() == 'election') {?> class="active has-sub" <?php } ?>> 
                            <a href="<?php echo base_url()?>election">
                                <i class="fas fa-archive"></i>Election</a>
                        </li>
                        <li <?php if($this->router->fetch_class() == 'poll') {?> class="active has-sub" <?php } ?>> 
                            <a href="<?php echo base_url()?>poll">
                                <i class="fas fa-bar-chart-o"></i>Poll</a>
                        </li>
                        <li <?php if($this->router->fetch_class() == 'contest') {?> class="active has-sub" <?php } ?>> 
                            <a href="<?php echo base_url()?>contest">
                                <i class="fas fa-trophy"></i>Contest</a>
                        </li>
                        <li <?php if($this->router->fetch_class() == 'userOrganization') {?> class="active has-sub" <?php } ?>> 
                            <a href="<?php echo base_url()?>userOrganization">
                                <i class="fas fa-users"></i>Organization</a>
                        </li>
                        <li <?php if($this->router->fetch_class() == 'profile') {?> class="active has-sub" <?php } ?>>
                            <a href="<?php echo base_url()?>profile">
                                <i class="fas fa-user-circle"></i>Profile</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>