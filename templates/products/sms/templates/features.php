<?php if (isset($_GET['item'])) {
     require_once( PRODUCT_ABSPATH. TEMPLATES . "feature.php");
}
else{
    ?>

<div  class="main zerogrid">
<div  class="wrapper row">

<div class="row">
    <div class="white-layer">
        <span class="s-top-margin"></span>
        <?php 
        $data=select_data('features', array('visibility'=>1,)) ;
        if (empty($data)) {
            
        }
        else{

            foreach ($data as $row) {
            $feat=$row['category'];
            $feat= strtolower($feat);   
            
        ?>
        <div class="col-md-4">
         <div id="mf48"  class="pg-item feature1" data-defwidth="390" data-type="smallslider" data-itemid="2631"><a id="mfa29" href="<?php printf( '%s%s/%s/%s', DOMAIN, PRODUCT, 'features',$row['permalink']);?>" title=""><div id="mf49" class="pg-info"><img id="mf50" style="opacity: 1;" src="<?php echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/'.$row['icon']?>" alt="Billing groups"><div id="mf51" style="width: 287px;" class="pg-details"><h4 id="mf52"><?php echo $row['feature'];?></h4><span id="mf53" class="pg-categories"><?php echo $row['category'];?></span></div></div></a></div>   
        </div>

        <?php }}?>
    </div>
</div>

</div>
</div>

<?php }?>