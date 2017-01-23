<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>వీడియో గ్యాలరీ</title>
<?php include 't-headerstyles.php' ?>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery.poptrox.min.js"></script>
<style type="text/css">
#gallery { overflow: hidden; }
#gallery a { display: block; float: left; }
#gallery a img { display: block; border: 0; }
</style>
<script>
$(function() {
		var foo = $('#gallery');
		foo.poptrox({
			usePopupCaption: true
		});
	
	});
</script>
</head>
<body>
<!-- wrapper -->
<div id="wrapper">
  <!-- header -->
  <header id="header">
    <!-- topbar -->
    <?php include 't-header.php' ?>
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
									<h1>వీడియో గ్యాలరీ</h1>
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
        	<div id="gallery">
			<div>
						<div id="content">
							<div id="timeline" data-columns class="gallery">
                            
                            <?php
							foreach($view_video as $rec)
							{
								$a= $rec->link;
									  $embed=preg_replace('/.+(\?|&)v=([a-zA-Z0-9-_]+).*/', 'http://youtube.com/watch?v=$2', $a);
									  $st1=explode('v=',$embed);
									  $st2=explode('&amp;',$st1[1]);
									  $vidID = $st2[0];
									  $vidID= explode('&',$vidID);
							?>
								<div class="item">
									<div class="img-area">
										<a href="#" class="icon-cam"><span class="fa fa-video-camera"></span>
											</a>
										<img src="http://img.youtube.com/vi/<?php echo $vidID[0];?>/0.jpg" alt="" class="img-responsive">
										<div class="hover-block">
											<ul class="bar">
                                            	<li>
													<a href="#"><span class="fa"></span></a>
												</li>						
												<li>
                                                    <a href="https://youtu.be/<?php echo $vidID[0];?>" data-poptrox="youtube,800x480">View Video</a>
												</li>
                                               <li>
													<a href="#"><span class="fa"></span></a>
												</li>										
											</ul>
										</div>
									</div>
								</div>
                                <?php } ?>
                                
								
                                
                                
                                
							</div>
						</div>
                        </div>     
					</div>
      </div>
        <!-- upcoming events -->
      </div>
    </div>
  </main>
  <!-- footer -->
  <?php include 't-footer.php' ?>
</body>
</html>
