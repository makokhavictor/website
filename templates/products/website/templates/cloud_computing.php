<?php 
ob_start();
?>
<div  class="main zerogrid">
<div  class="wrapper row">
<div class="col-full">
	<div class="white-layer">
		<div class="cloud-c-wrapper">
			<div class="fadeInUpp circle-3">
				<span class="icon-wrapper2 move">
					<i class="fa fa-cloud fa-lg"></i>
				</span>
				<span class="icon-wrapper3 move2">
					<i class="fa fa-cloud fa-lg"></i>
				</span>
				<span class="icon-wrapper4 move3">
					<i class="fa fa-cloud fa-lg"></i>
				</span>
				<span class="icon-wrapper6 move4">
					<i class="fa fa-cloud fa-lg"></i>
				</span>
				<figure class="cloud-image zoomInn">
					<img src="<?php echo DOMAIN.PRODUCTS.PRODUCT; ?>/assets/images/slices/cloud.png" />
				</figure>
				<div class="cld-content zoomInn">
					<div class="a-content">
						<span class="title-header ">
							<i class="fa fa-cloud fa-lg"></i> Cloud Computing
						</span>
					</div>
					<p>In the simplest terms, cloud computing means storing , accessing data and programs over the Internet instead of your computer's hard drive.Having your data stored offsite in the cloud makes it accessible from anywhere without the hassle of maintaining your own local storage and file-serving systems. It makes all the difference in a disaster, too.The ability to back up files, store them in the cloud, and automatically sync all that data across multiple devices has radically changed the way we use computers, mobile phones, and other Internet-connected devices. That data could comprise home movies, your personal music collections, or work files that you and a colleague are collaboratively editing together. No matter what you put into a cloud storage and syncing solution, the benefit of being able to access it nearly anywhere is phenomenal.</p>
				</div>
			</div>
		</div>
		<br class="clear-fix">
	</div>
</div>
</div>
</div>
  <?php
    $f_content = ob_get_contents();
    ob_end_clean();
    load_product_body('Cloud Computing',$f_content);
?>
