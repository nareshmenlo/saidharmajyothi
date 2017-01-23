<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>Photo Gallery</title>
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
					<div class="holder"><img src="<?php echo base_url(); ?>public/images/subpagebanner9.jpg" width="1600" height="264" alt="" />
					</div>
				</div>
				<div class="textholder">
					<div class="container textblock">
						<div class="block">							
							<div class="page-title">
								<div class="holder">
									<h1>ఫోటో గ్యాలరీ</h1>
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
        <?php //include 'leftblock.php' ?>
        <!-- blogs -->
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 midcontent">        
			<div>
						<div id="content">
							<div id="timeline" data-columns class="gallery">
                            
                            
                               <?php
							   foreach($view_gallery as $rec)
							   {
							   ?>
								<div class="item">
									<div class="img-area">
										<a href="#" class="icon-cam"><span class="fa fa-image"></span>
											</a>
										<img src="<?php echo base_url(); ?>thumb/timthumb.php?src=<?php echo base_url(); ?>public/gallery/<?php echo $rec->images; ?>&w=371&h=181&q=50" alt="" class="img-responsive"> 
										<div class="hover-block"></div>                                        
								</div> 
                                <div class="viewouter"><?php echo $rec->category ; ?><span class="viewrgt"><a href="<?php echo base_url(); ?>t_subphotogallery/<?php echo $rec->cat_id; ?>/<?php echo $rec->url_cat; ?>" class="btnview">View All</a></span></div>                           
                                </div>
                                <?php } ?>
                                
                                
                                
                                
                                
                                
                                
							</div>
						</div>
					</div>
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
