<?php include'includes/header.php'?>
<style>
#header{ background:#f9f9f9!important;}
.my_pagination {
	margin: 0;
	padding: 0;
	list-style: none
}
.my_pagination li {
	display: inline-block;
	float: left;
	margin-right: 10px
}
.my_pagination li a {
	display: block;
	background: #f9f9f9;
	border: 1px solid #e5e5e5;
	height: 35px; text-decoration:none;
	width: 35px;
	line-height: 35px;
	text-align: center;
	color: #333
}
.my_pagination li :hover {
	background: #fff
}
.my_pagination .activemy a {
	background: #f60;
	color: #fff;
	border-color: #f60
}
.shadow{ margin-left:0px;}
.imge001{ margin-bottom:20px; padding:0px 15px;}
.mygrid{ margin:0px; padding:0px; list-style:none; display:table; clear:both; margin:0px -15px !important;}
.mygrid li{ display:inline-block; float:left; width:33.3%; padding-left:15px;
box-sizing:border-box;
-webkit-box-sizing:border-box;
-ms-box-sizing:border-box;
-moz-box-sizing:border-box;}
.mygrid li a{ display:block; }
.mygrid li img{ width:100%;}
@media(max-width:990px){
	.mygrid li{ width:50%;}
	
}
@media(max-width:768px){
.mygrid li{ width:100%;}
	

</style>
		</div>
	  </div>
	</header>
	<section id="content" class="container-fluid" style=" background:url(<?php echo base_url(); ?>public/skins/32.png);">
	<div class="container" >
  
	<div class="shadow gallery">
    <h2>Our <span style="color:#333;">Gallery</span></h2>
		<ul class="mygrid">
        <li> <div class="imge001"><a href="<?php echo base_url(); ?>public/images/image.jpg" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>public/images/image.jpg"  /></a></div></li>
         <li> <div class="imge001"><a href="<?php echo base_url(); ?>public/images/image.jpg" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>public/images/image.jpg"  /></a></div></li>
          <li> <div class="imge001"><a href="<?php echo base_url(); ?>public/images/image.jpg" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>public/images/image.jpg"  /></a></div></li>
           <li> <div class="imge001"><a href="<?php echo base_url(); ?>public/images/image.jpg" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>public/images/image.jpg"  /></a></div></li>
            <li> <div class="imge001"><a href="<?php echo base_url(); ?>public/images/image.jpg" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>public/images/image.jpg"  /></a></div></li>
             <li> <div class="imge001"><a href="<?php echo base_url(); ?>public/images/image.jpg" rel="prettyPhoto[gallery]"><img src="<?php echo base_url(); ?>public/images/image.jpg"  /></a></div></li>
        </ul>
        
        <ul class="my_pagination">
     <li ><a href="">&#9668;</a></li>
     <li class="activemy"><a href="">1</a></li>
     <li><a href="">2</a></li>
     <li><a href="">3</a></li>
     <li><a href="">4</a></li>
      <li><a href="">5</a></li>
       <li><a href="">6</a></li>
      <li><a href="">&#9658;</a></li>
      <div class="clearfix"></div>
     </ul>
	</div>
<?php include'includes/footer.php'?>
<!--Gallery Code -->

<script type="text/javascript">
$(document).ready(function(){
$("area[rel^='prettyPhoto']").prettyPhoto();
$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
changepicturecallback: function(){ initialize(); }});
$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
changepicturecallback: function(){ _bsap.exec(); }});});
</script>
<!--Gallery Code -->