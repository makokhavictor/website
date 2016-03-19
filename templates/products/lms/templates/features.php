<?php 
ob_start();
?>
<div class="lms-main-header-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="lms-heading">
					<h3>Features</h3>
					<span>Software that will let you practice more and manage less.</span>
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
			<h4 class="u-caps darh-heading bold">Features to help you in your practice</h4>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p>Global Legal Management System has been developed with intense consultation from various law firm ranging from small to big firms to enable us cater for every law firm. With numerous modules/features, you can be able to run all normal firm operations using our software which will definitely help you to stay organised and focus on your practice duties as the software takes care of the management part.</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="lms-content">
				<p>Global Legal Management System is the only software that also includes an integrated client portal so everyone stays informed and connected. Clients are able to login to the system if authorised to access the system and beable to view all sent invoices to them, their matter progress as well as get reminders of important dates so that they are not left out during important cour hearing or meeting with the concerned lawyer.</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="video-canvas">
              <iframe width="100%" height="200px" src="https://www.youtube.com/embed/dbg_19A03Gg" frameborder="0" allowfullscreen></iframe>
            </div>
		</div>
		</div>
	</div>

		<div class="container">
			<div class="row">
				<?php 
					$results = select_data ( 'features', array ( 'visibility' => 1 ), 'id, ASC' );
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
			            <a class="f-link" href="<?php printf ( '%s%s/features/%s', DOMAIN, PRODUCT, $row['permalink'] ); ?>">Learn More</a>
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
    load_product_body('LMS Features',$f_content);
?>