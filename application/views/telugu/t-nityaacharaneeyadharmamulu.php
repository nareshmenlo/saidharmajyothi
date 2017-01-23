<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>నిత్య ఆచరణీయ ధర్మములు</title>
<?php include 't-headerstyles.php' ?>
<script src="<?php echo base_url(); ?>public/js/modernizr.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/flexslider.css" type="text/css" media="screen" />
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
					<div class="holder"><img src="<?php echo base_url(); ?>public/images/subpagebanner2.jpg" width="1600" height="196" alt="" />
					</div>
				</div>
				<div class="textholder">
					<div class="container textblock">
						<div class="block">							
							<div class="page-title">
								<div class="holder">
									<h1>నిత్య ఆచరణీయ ధర్మములు</h1>
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
        <section class="col-lg-3 col-xs-12 col-sm-6 media"> 
        <img src="<?php echo base_url(); ?>public/images/saileft4.jpg" class="img-responsive" alt=""><br>
        <?php include 't-leftblock.php' ?>                        
        </section>
        <!-- blogs -->
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 midcontent">
        	<section class="slider">
            <div class="flexslider">
              <ul class="slides">
                <?php
				foreach($view_nithya as $rec)
				{
				?>
              	<li><img src="<?php echo base_url(); ?>public/awards/<?php echo $rec->image; ?>" alt=""></li>
                <?php } ?>
                </ul>
            </div>
      </section>
      	</div>
        <!-- upcoming events -->
      </div>
    </div>
  </main>
  <!-- footer -->
  <script src="<?php echo base_url(); ?>public/js/jquery.min.1.10.1.js"></script>
  <?php include 't-footer.php' ?>
  <script defer src="<?php echo base_url(); ?>public/js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</body>
</html>
