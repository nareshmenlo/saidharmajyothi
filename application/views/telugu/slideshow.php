<div id="owl-demo" class="owl-carousel">
    <?php
foreach($view_banner as $ban)
{
?>
<div class="item">
      <div class="img-area">
        <div class="img-holder"><img src="<?php echo base_url(); ?>public/banner/<?php echo $ban->image; ?>" alt="image description"> </div>
      </div>      
    </div>
    <?php } ?>
    
    
  </div>