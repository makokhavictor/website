
    <header class="header-frontend">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#"><img class="logo" src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/logo.png" /></a>
                    <a class="navbar-brand" href="#">Global<span> LMS</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a  href="<?php echo DOMAIN.PRODUCT; ?>">Home</a></li>
                        <li><a href="<?php printf( '%s%s/%s', DOMAIN, PRODUCT, 'about');?>">About LMS</a></li>
                        <li><a href="<?php printf( '%s%s/%s', DOMAIN, PRODUCT, 'features');?>">Features</a></li>
                        <li><a href="<?php printf( '%s%s/%s', DOMAIN, PRODUCT, 'why-us');?>">Why Us</a></li>                        
                        <li><a href="<?php echo DOMAIN .'website/contact'; ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->