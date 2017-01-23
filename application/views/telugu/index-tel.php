<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>సాయి ధర్మ జ్యోతి</title>
<?php include 't-headerstyles.php' ?>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
  <!-- header -->
  <header id="header">
    <?php include 't-header.php'?>
  </header>
  <!-- slideshow -->
  <?php include 'slideshow.php'?>
  <!-- main -->
  <main id="main" role="main" class="home">
    <!-- sermon -->
    <section class="sermon wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
      <?php include 'audiobarandevent.php'?>
    </section>
    <!-- welcome -->
    <div class="welcome text-center container wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
      <header class="text-box">
        <h3><?php echo strip_tags(stripslashes($view_homeheading['content'])); ?><br>
<span>సాయి ధర్మ జ్యోతి</span></h3>
      </header>
    </div>
    <hr>
    <div class="container widgets">
      <div class="row">
      <section class="col-lg-3 col-xs-12 col-sm-6 media"> 
        <img src="<?php echo base_url(); ?>public/apartments/<?php echo $view_dharma['pdf']; ?>" class="img-responsive" alt=""><br>
        <?php include 't-leftblock.php' ?>                        
        </section>
        <!-- blogs -->
        <div class="col-lg-6 col-sm-6">      
          	<img src="<?php echo base_url(); ?>public/apartments/<?php echo $view_dharma['image']; ?>" alt="" class="telimgresp"><br>
            <p class="pull-right"><a href="<?php echo base_url(); ?>t_saidharmajyothi" class="link">Read More</a></p>
          <br>
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
     <?php include 't-rightblock.php' ?>        	            
      </div>
    </div>
  </main>
  <!-- footer -->
  <script src="<?php echo base_url(); ?>public/js/jquery.min.1.10.1.js"></script>
  <?php include 't-footer.php' ?>
</body>
</html>
