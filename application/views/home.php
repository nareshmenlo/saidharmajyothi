<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>SaiDharmaJyothi</title>
<?php include 'headstyles.php' ?>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
  <!-- header -->
  <header id="header">
    <!-- topbar -->
    <?php include 'header.php' ?>
  </header>
  <!-- slideshow -->
    <?php include 'slideshow.php' ?>
  <!-- main -->
  <main id="main" role="main" class="home">
    <!-- sermon -->
    	<?php include 'audiobarandevents.php' ?>
    <!-- welcome -->
    <div class="welcome text-center container wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
      <header class="text-box">
        <h3> <?php echo strip_tags(stripslashes($view_homeheading['content'])); ?><br>
<span>SAI DHARMA JYOTHI</span></h3>
      </header>
    </div>
    <hr>
    <div class="container widgets">
      <div class="row">
      <section class="col-lg-3 col-xs-12 col-sm-6 media"> 
        <img src="<?php echo base_url(); ?>public/content/<?php echo $view_dharma['image']; ?>" class="img-responsive" alt=""><br>
        <?php include 'leftblock.php' ?>                         
        </section>
        <!-- blogs -->
        <div class="col-lg-6 col-sm-6 midcontent">      
          <h4 class="text-center">PARITHRAANAAYA SAADHUNAAM VINAASHAYACHA DUSKRUTAAM
DHRAMA SAMSTHAAPANAARTHAAYA SAMBHAVAMI YUGE YUGE!!!</h4>
<?php echo stripslashes($view_dharma['content']); ?>
		<p class="pull-right"><a href="<?php echo base_url(); ?>saidharmajyothi">Read More</a></p>
		<br>
      <div class="team">
							<div class="text">
								<h3><a href="#">Important Points</a></h3>
								<strong>SOME RITUALS MOST OF US FORGOT LONG BACK LIFE</strong><br><br>

								<!-- top social networks -->                                
								<ul class="imppoints">
                                <?php
								foreach($view_impoints as $imp)
								{
								?>
                                    <li><?php echo $imp->strategies_name; ?></li>
                                    <?php } ?>
                                   
                                </ul>
							</div>
						</div>
        </div>
        <!-- upcoming events -->
       <?php include 'rightblock.php' ?>
      </div>
    </div>
  </main>
  <!-- footer -->
  <script src="<?php echo base_url(); ?>public/js/jquery.min.1.10.1.js"></script>
  <?php include 'footer.php' ?>
</body>
</html>
