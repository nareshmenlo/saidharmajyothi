<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<title>Audio Gallery</title>
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
									<h1>ఆడియో గ్యాలరీ</h1>
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
                        	<div class="row">
                            	<div class="col-md-4 midcontent">                            	
                                	<ul class="audiolist">
                                    <?php
									$i=0;
									foreach($view_audiogallery as $rec)
									{
										if($i!=0 && $i%5==0) {
									?></ul></div> <div class="col-md-4 midcontent">                            	
                                	<ul class="audiolist"><?php } ?>
                                    	<li><a href="<?php echo base_url(); ?>t_saipravanchanalu/<?php echo $rec->sno; ?>/<?php echo $rec->url; ?>"><?php echo $rec->name; ?></a></li>
                                       <?php $i++; } ?>      
                                    </ul>   
                                                          
                            	</div>
                                <!--<div class="col-md-4 midcontent">                            	
                                	<ul class="audiolist">
                                    	<li><a href="saipravanchanaluone.php">Sai Pravanchanalu One</a></li>
                                        <li><a href="saipravanchanalutwo.php">Sai Pravanchanalu Two</a></li>
                                        <li><a href="saipravanchanaluthree.php">Sai Pravanchanalu Three</a></li>
                                        <li><a href="saipravanchanalufour.php">Sai Pravanchanalu Four</a></li>
                                        <li><a href="saipravanchanalufive.php">Sai Pravanchanalu Five</a></li>
                                    </ul>                               
                            	</div>-->
                                
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
