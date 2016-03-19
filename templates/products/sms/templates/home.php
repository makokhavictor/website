<?php if (isset($_GET['section'])) {
  $sec=$_GET['section'];
 
     require_once( PRODUCT_ABSPATH. TEMPLATES . $sec.".php");
 
    
}
else{
    ?>
	
	 

     <!-- revolution slider start -->
     <div class="fullwidthbanner-container main-slider">
         <div class="fullwidthabnner">
             <ul id="revolutionul" style="display:none;">
                 <!-- 1st slide -->
                 <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                     <div class="caption lfl slide_item_left"
                          data-x="10"
                          data-y="70"
                          data-speed="400"
                          data-start="1500"
                          data-easing="easeOutBack">
                         <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/ban2.png" alt="Image 1">
                     </div>
                     <div class="caption lfr slide_title"
                          data-x="670"
                          data-y="120"
                          data-speed="400"
                          data-start="1000"
                          data-easing="easeOutExpo">
                         Clean & Creative
                     </div>

                     <div class="caption lfr slide_subtitle dark-text"
                          data-x="670"
                          data-y="190"
                          data-speed="400"
                          data-start="2000"
                          data-easing="easeOutExpo">
                         A Responsive Frontend Template
                     </div>
                     <div class="caption lfr slide_desc"
                          data-x="670"
                          data-y="260"
                          data-speed="400"
                          data-start="2500"
                          data-easing="easeOutExpo">
                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>
                         accusantium doloremque laudantium, totam rem aperiam,<br>
                         eaque ipsa quae ablic jiener.
                     </div>
                     <a class="caption lfr btn yellow slide_btn" href="http://thevectorlab.net/flatlab" target="_blank"
                        data-x="670"
                        data-y="400"
                        data-speed="400"
                        data-start="3500"
                        data-easing="easeOutExpo">
                         Watch Dashboard
                     </a>

                 </li>

                 <!-- 2nd slide  -->
                 <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="9400" data-thumb="">
                     <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                     <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/banner_bg.jpg" alt="">
                     <div class="caption lft slide_title"
                          data-x="10"
                          data-y="125"
                          data-speed="400"
                          data-start="1500"
                          data-easing="easeOutExpo">
                         YAHOOOOO. TWO IN ONE
                     </div>
                     <div class="caption lft slide_subtitle dark-text"
                          data-x="10"
                          data-y="180"
                          data-speed="400"
                          data-start="2000"
                          data-easing="easeOutExpo">
                         Admin & Fronend in a single bundle
                     </div>
                     <div class="caption lft slide_desc dark-text"
                          data-x="10"
                          data-y="240"
                          data-speed="400"
                          data-start="2500"
                          data-easing="easeOutExpo">
                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>
                         accusantium doloremque laudantium, totam rem aperiam,<br>
                         eaque ipsa quae ablic jiener.
                     </div>
                     <a class="caption lft slide_btn btn red slide_item_left" href="#" target="_blank"
                        data-x="10"
                        data-y="360"
                        data-speed="400"
                        data-start="3000"
                        data-easing="easeOutExpo">
                         Purchase Now
                     </a>
                     <div class="caption lft start"
                          data-x="640"
                          data-y="55"
                          data-speed="400"
                          data-start="2000"
                          data-easing="easeOutBack"  >
                         <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/man.png" alt="man">
                     </div>
                     <div class="caption lft slide_item_right"
                          data-x="330"
                          data-y="20"
                          data-speed="500"
                          data-start="5000"
                          data-easing="easeOutBack">
                         <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/test_man.png" id="rev-hint2" alt="txt img">
                     </div>

                 </li>

                 <!-- 3rd slide  -->
                 <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="9400" data-thumb="">
                     <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/red-bg.jpg" alt="">
                     <div class="caption lfl slide_item_right"
                          data-x="10"
                          data-y="105"
                          data-speed="1200"
                          data-start="1500"
                          data-easing="easeOutBack">
                         <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/imac.png" alt="Image 1">
                     </div>
                     <div class="caption lfl slide_item_right"
                          data-x="25"
                          data-y="345"
                          data-speed="1200"
                          data-start="2000"
                          data-easing="easeOutBack">
                         <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/tab.png" alt="Image 1">
                     </div>
                     <div class="caption lfl slide_item_right"
                          data-x="200"
                          data-y="330"
                          data-speed="1200"
                          data-start="2500"
                          data-easing="easeOutBack">
                         <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/mobile.png" alt="Image 1">
                     </div>
                     <div class="caption lfl slide_item_right"
                          data-x="250"
                          data-y="230"
                          data-speed="1200"
                          data-start="3000"
                          data-easing="easeOutBack">
                         <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/laptop.png" alt="Image 1">
                     </div>
                     <div class="caption lfl slide_item_right"
                          data-x="165"
                          data-y="30"
                          data-speed="500"
                          data-start="5000"
                          data-easing="easeOutBack">
                         <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES; ?>/banner/text_imac.png" id="rev-hint1" alt="Image 1">
                     </div>

                     <div class="caption lfr slide_title slide_item_left yellow-txt"
                          data-x="670"
                          data-y="145"
                          data-speed="400"
                          data-start="3500"
                          data-easing="easeOutExpo">
                         Full Responsive
                     </div>
                     <div class="caption lfr slide_subtitle slide_item_left"
                          data-x="670"
                          data-y="200"
                          data-speed="400"
                          data-start="4000"
                          data-easing="easeOutExpo">
                         And Awesome Flat Design
                     </div>
                     <div class="caption lfr slide_desc slide_item_left"
                          data-x="670"
                          data-y="280"
                          data-speed="400"
                          data-start="4500"
                          data-easing="easeOutExpo">
                         Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br>
                         accusantium doloremque laudantium, totam rem aperiam,<br>
                         eaque ipsa quae ablic jiener.
                     </div>


                 </li>

             </ul>
            <div class="tp-bannertimer tp-top"></div>
         </div>
         <!-- Home intro parts -->

         <!-- end of home intro parts -->
     </div>
     <!-- revolution slider end -->

    <!--container start-->
    <div class="container">
        <div class="row">
            <div class="hiring">
                <div class="col-lg-4 col-sm-4">
                    <div class="icon-wrap ico-bg round">
                        <i class="icon-desktop"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">What You Experience</h3>
                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                        <a class="home-section-link" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="icon-wrap ico-bg round">
                        <i class="icon-desktop"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">What Your Clients Experience</h3>
                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                        <a class="home-section-link" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="icon-wrap ico-bg round">
                        <i class="icon-user"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Getting Started</h3>
                        <p>Suspendisse dignissim in sem eget pulvinar. Mauris aliquam nulla at libero pretium, eu tincidunt nulla molestie pulvinar posuere.</p>
                        <a class="home-section-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


   
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . JS; ?>/jquery.js"></script>
    <script src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . JS; ?>/jquery-1.8.3.min.js"></script>
    <script src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . JS; ?>/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . JS; ?>/jquery.parallax-1.1.3.js"></script>

    <script src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . JS; ?>/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . ASSETS; ?>/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . ASSETS; ?>/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . JS; ?>/revulation-slide.js"></script>


  <script>

      RevSlide.initRevolutionSlider();

      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });
  </script>
  <?php } ?>