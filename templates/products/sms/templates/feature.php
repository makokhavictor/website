<?php

 $perm=$_GET['item']; 
$data=select_data('features', array('visibility'=>1,'permalink'=>$perm)) ;
        if (empty($data)) {
            
        }
        else{

            foreach ($data as $row) {
            


?>
<div class="boxbg">
<div class="featurediv">
<div class="row">
  <div class="col-md-5 con">
      <h2 class="ps-title"> <?php echo $row['feature']; ?></h2>
      <span id="mf48" class="ps-categories"><?php echo $row['category']; ?></span>

      <div class="pcon"> <?php echo $row['description']; ?></div>

  </div> 

  <div class="col-md-6"> <img src="<?php echo DOMAIN.PRODUCTS.PRODUCT.'/assets/images/icons/'.$row['image']?>"></div>  
</div>
</div>
</div>
<?php }} ?>
