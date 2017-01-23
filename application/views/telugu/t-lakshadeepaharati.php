<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>లక్ష దీప మహా సంధ్యా హారతి</title>
<?php include 't-headerstyles.php' ?>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
  <!-- header -->
  <header id="header">
    <!-- topbar -->
    <?php include 't-header.php'?>
  </header>
 <section id="page-info" class="container-fluid">
			<div class="row">
				<div class="img-area">
					<div class="holder"><img src="<?php echo base_url(); ?>public/images/subpagebanner2.jpg" width="1600" height="264" alt="" />
					</div>
				</div>
				<div class="textholder">
					<div class="container textblock">
						<div class="block">							
							<div class="page-title">
								<div class="holder">
									<h1>లక్ష దీప మహా సంధ్యా హారతి</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
  <!-- main -->
  <main id="main" role="main" class="home">
    <!-- sermon -->    
    <div class="container topmargpad">
      <div class="row">
        <section class="col-lg-3 col-xs-12 col-sm-6"> 
        <img src="<?php echo base_url(); ?>public/content/<?php echo $view_content['image']; ?>" class="img-responsive" alt=""><br>
        <div class="donateaddbox">
        	<h3>Please send your donations to:</h3>
            <h5 style="color:#fff; line-height:18px;"><?php echo $view_links['meta_title']; ?>,<br>
            <?php echo $view_links['meta_keywords']; ?>,<br>
            Account NO:<?php echo $view_links['meta_desc']; ?>,<br>
            IFS Code: <?php echo $view_links['Pinterestt']; ?>.</h5>
        </div>
        <div class="getintouch harathi">
        <h3 class="text-center" style="margin:0px; padding:0px;color:#104801; font-size:22px;">ధరఖాస్తూదారుని వివరములు</h3><hr>
        	<form class="form-widget" method="post" action="<?php echo base_url(); ?>t_lakshadeepaharati/lakshadeepaharati_form">
<div class="form-group">
  <div class="label-area"> <span class="required">Required</span>
    <label>Name</label>
  </div>
  <input type="text" class="form-control" name="name" value="" required>
</div>
<div class="form-group">
  <div class="label-area"><span class="required">Required</span>
    <label>Phone Number</label>
  </div>
  <input type="text" class="form-control" name="mobile" value="" required>
</div>
<div class="form-group">
  <div class="label-area"> <span class="required">Required</span>
    <label>Email ID</label>
  </div>
  <input type="email" class="form-control" name="email" value="">
</div>
<div class="form-group">
  <div class="label-area"> <span class="required">Required</span>
    <label>Events Participation</label>
  </div>
  <div class="checkbox">
  <label style="padding-right:10px;">
    <input type="checkbox" name="participation[]" value="HAARATI" > HAARATI
  </label>
  <label style="padding-right:10px;">
    <input type="checkbox"  name="participation[]" value="HOMAMU" > HOMAMU
  </label>
  <label>
    <input type="checkbox" name="participation[]" value="SEVA" > SEVA
  </label>
</div>
</div>
<div class="form-group">
    <div class="label-area">
        <label for="name">Address</label>
    </div>
    <textarea class="form-control" name="address" ></textarea>
</div>
<input class="btn btn-primary" type="submit" value="SUBMIT">
</form>
        </div>
        <?php include 't-leftblock.php' ?>                      
        </section>
        <!-- blogs -->
        <div class="col-lg-9 col-md-9 midcontent">        
			<?php //echo stripslashes($view_content['content']); ?>
            
            <?php
foreach($view_lakshadeepaharatiimg as $limg)
{
?>
<div align="center"><img src="<?php echo base_url(); ?>public/facts/<?php echo $limg->image; ?>" class="img-responsive" alt=""></div><br><br>
<?php } ?>

          <!--<div align="center"><img src="<?php echo base_url(); ?>images/finalpamphletfront.jpg" class="img-responsive" alt=""></div><br><br>
<div align="center"><img src="<?php echo base_url(); ?>images/finalpamphletback.jpg" class="img-responsive" alt=""></div><br><br>-->
      </div>
        <!-- upcoming events -->
      </div>
    </div>
  </main>
  <!-- footer -->
  <script src="<?php echo base_url(); ?>public/js/jquery.min.1.10.1.js"></script>
  <?php include 't-footer.php' ?>
</body>
</html>
