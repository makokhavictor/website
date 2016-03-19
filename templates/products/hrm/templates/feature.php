<?php 
  $link = gsl_clean_permalink ( $_GET['item'] );
    $result = select_data ( 'features', array ( 'permalink' => $link, 'visibility' => 1 ) );
    if ( empty ( $result ) ):
      printf ( '%s', lms_er ( 'error', 'We could not find what you are looking for.' ) );
    else:
      foreach ( $result as $row ):
      ?>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h4 class="u-caps darh-heading bold"><?php printf ( '%s', $row['feature'] ); ?></h4>
          </div>
          <div class="col-sm-6">
            <div class="lms-box-p">
              <?php printf ( '%s', $row['description'] ); ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="video-canvas">
              <iframe width="100%" height="300px" src="https://www.youtube.com/embed/dbg_19A03Gg" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <br class="clear-fix">
          <?php 
            $screens = ( array ) json_decode( $row['screens'] );
            foreach ( $screens as $screen ):
              ?>
              <div class="col-sm-6">
                <div class="screen-holder">
                  <figure>
                    <a href="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . $screen; ?>"><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . $screen; ?>" class="" alt="">
                    </a>
                  </figure>
                </div>
              </div>
              <?php
            endforeach;
           ?>
        </div>
        <br class="clear-fix">
        <div class="col-sm-12">
          <h4 class="u-caps darh-heading bold" style="margin:1em 0 0.5em 0;">Features List</h4>
        </div>
        <div class="col-sm-12">
          <div class="lms-fet-nav">
            <?php 
              $lists = select_data ( 'features', array ( 'visibility' => 1 ) );
              foreach ( $lists as $lis ):
                if ( $lis['permalink'] == $link ):
                ?>
                <a class="current" href="<?php echo DOMAIN . PRODUCT . '/features/' . $lis['permalink']; ?>"><?php printf ( '%s', $lis['feature'] ); ?></a>
                <?php
                else:
                ?>
                <a href="<?php echo DOMAIN . PRODUCT . '/features/' . $lis['permalink']; ?>"><?php printf ( '%s', $lis['feature'] ); ?></a>
                <?php
                endif;
              endforeach;
             ?>
          </div>
        </div>
      </div>

      <div class="lms-about-us-canvas">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'about.png' ?>" class="img-responsive" alt="">
              <div class="lms-bg-img-content">
                <h3>Global Legal Management Software</h3>
                <p>Designed for you and your clients with integrated client portal<br>
                 to keep updated and receieve invoices as well as alerts on<br>
                  important dates.</p>
                  <a href="#">View All Features</a>
              </div>
            </div>
            <div class="col-sm-6">
              <h3 class="u-caps">Main Features</h3>
              <div class="main-fets-holder">
                <span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'gavel.png' ?>" class="img-responsive" alt=""></span>
                <div>
                  <h5 class="u-caps bold">Matter Management</h5>
                  <p>It takes all of your critical practice challenges and organizes them in a way that is incredibly straightforward and intuitive</p>
                </div>
              </div>
              <div class="main-fets-holder">
                <span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'search.png' ?>" class="img-responsive" alt=""></span>
                <div>
                  <h5 class="u-caps bold">Conflict of Interest Checker</h5>
                  <p>Our conflict checker searches through the contact database and emails in order to avoid conflict of interest situations.</p>
                </div>
              </div>
              <div class="main-fets-holder">
                <span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'billing.png' ?>" class="img-responsive" alt=""></span>
                <div>
                  <h5 class="u-caps bold">Time & Expense Tracking</h5>
                  <p>LMS makes it easier to capture ALL billable time and expenses thus increasing your efficiency</p>
                </div>
              </div>
              <div class="main-fets-holder">
                <span><img src="<?php echo DOMAIN . PRODUCTS . PRODUCT . '/' . IMAGES . 'responsive.png' ?>" class="img-responsive" alt=""></span>
                <div>
                  <h5 class="u-caps bold">Accessibility</h5>
                  <p>It gives you the freedom to work when you want and where you want without restrictions using your smart devices. (Ipad, & Smartphones)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br class="clear-fix">
      <?php
      endforeach;
    endif;
 ?>