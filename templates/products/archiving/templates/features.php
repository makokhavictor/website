<?php 
ob_start();
?>
<div class="lms-main-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="lms-heading">
                    <h3>Features</h3>
                    <span>With meta tags files can be easily searched.</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb-holder">
                    <a href="<?php echo DOMAIN . PRODUCT; ?>">Home &rsaquo;</a>
                    <?php 
                        if ( isset ( $_GET['item'] ) ):
                            $link = gsl_clean_permalink ( $_GET['item'] );
                            $title = particular_detail( $link, 'features', 'permalink', 'feature' );
                            if ( $title != '' ):
                                printf ( '%s %s', '<a href="'. DOMAIN . PRODUCT . '/features' .'">Features &rsaquo;</a>', '<a>'. $title .'</a>' );
                            else:
                                printf ( '%s', '<a>Features</a>' );
                            endif;
                        else:
                            printf ( '%s', '<a>Features</a>' );
                        endif;
                     ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    if ( isset ( $_GET['item'] ) ):
        require_once ( ABSPATH . PRODUCTS . PRODUCT . '/' . TEMPLATES . 'feature.php' );
    else:
    ?>
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="u-caps darh-heading bold">Features to help you go paperless</h4>
        </div>
        <div class="col-sm-4">
            <div class="lms-content">
                <p>The future is increasingly paperless, but paper continues to play a major role for every organization. Our software delivers a bridge to the future by integrating digital technologies with state-of-the-art paper records management services. From storage and document handling platform, we offer the services and solutions that enable you to cross the bridge to less paper.</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="lms-content">
                <p>The transition begins by consolidating your offsite records, removing the file cabinets and emptying the storage rooms that take up valuable office space. Archive Systems delivers a unique Adaptive Document Management solution that aligns with your needs as you evolve from dependence on paper to digital documents. </p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="lms-content">
                <p>Global Archiving System is secure and reliable. Based on proven existing solutions, you can be confident that an investment in Global Archiving System is an investment in long-term storage and archiving capabilities. Physical files are managed by a secure document archive. Global archiving system aims at saving you money and improving your effifiency.</p>
            </div>
        </div>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <?php 
                    $results = select_data ( 'archive_features', array ( 'visibility' => 1 ), 'id, ASC' );
                    if ( empty ( $results ) ):
                        printf ( '%s', lms_er ( 'error', 'We could not find any features for display.' ) );
                    else:
                        foreach ( $results as $row ):
                 ?>
                <div class="col-sm-3">
                  <!-- section -->
                    <div class="f1_container">
                    <div class="f1_card" class="shadow">
                      <div class="front face f-green">
                        <div class="home-sectn">
                          <span class="hme-icon-holder"><i class="fa <?php printf ( '%s', $row['icon'] ); ?>"></i></span>
                          <h4 class="hme-h"><?php printf ( '%s', $row['feature'] ); ?><span></span></h4>
                        </div>
                      </div>
                      <div class="back face center">
                        <h4 class="hme-h"><?php printf ( '%s', $row['feature'] ); ?><span></span></h4>
                        <p class="f-p"><?php printf ( '%s', $row['caption'] ); ?></p>
                        
                      </div>
                    </div>
                    </div>
                  <!-- end of section -->
                </div>
                <?php 
                        endforeach;
                    endif;
                 ?>
            </div>
        </div>
    <?php
    endif;
 ?>
  <?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('Archiving Features',$f_content);
?>