   <?php 
        function asign_current_state ( $menu ) {
            if ( isset ( $_GET['page'] ) ):
                $curr = $_GET['page'];
            else:
                $curr = 'home';
            endif;
            return ( $menu == $curr ) ? 'class="active"' : '';
        }

     ?>
    <!-- HEADER -->
    <div class="container-fluid">
        <div class="row">
            <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="col-sm-3">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo DOMAIN; ?>"><img class="logo" src="<?php echo DOMAIN;?>images/slices//logo.png" /></a>
                        <a class="navbar-brand" href="<?php echo DOMAIN; ?>">Global<span> LMS</span></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li <?php echo asign_current_state('home'); ?>><a  href="<?php echo DOMAIN . PRODUCT; ?>">Home</a></li>
                        <li <?php echo asign_current_state('about'); ?>><a href="<?php echo DOMAIN . 'lms/about'; ?>">About</a></li>
                        <li <?php echo asign_current_state('features'); ?>><a href="<?php echo DOMAIN . 'lms/features'; ?>">Features</a></li>
                        <li <?php echo asign_current_state('why-us'); ?>><a href="<?php echo DOMAIN . 'lms/why-us'; ?>">Why LMS</a></li>              
                        <li <?php echo asign_current_state('contact'); ?>><a href="<?php echo DOMAIN . 'website/contact'; ?>">Contact</a></li>
                    </ul>
                </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="header-icons">
                            <a href="https://www.facebook.com/globalsitesltd" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/globalsites" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://plus.google.com/u/0/115828574589991976689/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>