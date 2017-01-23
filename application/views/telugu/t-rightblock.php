<section class="col-lg-3 col-xs-12 col-sm-6 media"> 
         	 <a href="#" class="btn btnsidebar btn-default"><i class="fa fa-bookmark"></i> ప్రేయర్ బై ఫౌండర్</a>
            <!--<a href="#" class="btn btnsidebar btn-default"><i class="fa fa-trophy"></i> అవార్డ్స్ &amp; ఆచిఎవెమెన్త్స్</a>-->
             <a href="#" class="btn btnsidebar btn-default"><i class="fa fa-pencil-square-o"></i> ప్రేయర్ రిక్వెస్ట్</a>
            <a href="#" class="btn btnsidebar btn-default"><i class="fa fa-paypal"></i> ఫై పాల్ (ఆన్లైన్ విరాళములు)</a>            
        </section>
<div class="col-lg-3 col-sm-6 col-xs-12 upcoming-events">
						<strong class="h3">Upcomming Events</strong>
                          <?php
						  $view_events=$this->user_model->view_upcomingevents();
						  foreach($view_events as $events)
			              {
							  $from_date=$events->from_date;
							  $from_data=date('Y-M-d',strtotime($from_date));
							  $explode=explode('-',$from_data);
							  $data1=$explode[2];
							  $data2=$explode[1];
			                  $f_date=date('Y-m-d h:i A',strtotime($from_date));
							  
							  $from_cur=date('l F Y h:i A',strtotime($from_date));
							  $to_cur=date('l F Y h:i A',strtotime($events->to_date));
							  
						      ?>
						<article class="post">
							<time datetime="2015-01-28" class="time"><a href="#"><?php echo $data1; ?> <span><?php echo $data2; ?></span></a>
							</time>
							<div class="text">
								<h3><a href="#"><?php echo stripslashes($events->name); ?></a></h3>
								<time datetime="2014-08-17"><span class="fa fa-clock-o"></span><?php echo $from_cur; ?> To <?php echo $to_cur; ?></time>
								<address><span class="fa fa-map-marker"></span><?php echo strip_tags(stripslashes($events->content)); ?></address>
							</div>
						</article>
                        <?php } ?>
                        
															
					</div>
<section class="col-lg-3 col-xs-12 col-sm-6" style="border:1px solid #ccc;"> 
            	<h3 class="text-left">Latest News</h3>
                <hr>
                <div id="marqueecontainer" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">
                  <div id="vmarquee" style="position: absolute; width: 95%;">
                    <p class="latestnews">
                    <a href="#" class="latestnews"><span class="marquee">
                    <?php
					foreach($view_homenews as $news)
					{
					?>
                    <p align=center>
                    	<span class="marblk"><?php echo $news->title; ?></span>
                        Programme 1 :-<br />
                      <span class="margrey"><?php echo stripslashes($news->description); ?></span>                     
                     </a></p>
                      <hr>
                      <?php } ?>
                      
                      <!--<p align=center>
                    	<span class="marblk">GURU POWRNAMI CELEBRATIONS</span>
                        Programme 1 :-<br />
                      <span class="margrey">07-07-2011 Thursday to 13-07-2011 Wednesday<br>
                      Daily 6-45 am to 8-45 p.m "SAI SWACHARITHRA PARAYANAMU</span>                     
                     </a></p>
                     <hr>
                     <p align=center>
                    	<span class="marblk">GURU POWRNAMI CELEBRATIONS</span>
                        Programme 1 :-<br />
                      <span class="margrey">07-07-2011 Thursday to 13-07-2011 Wednesday<br>
                      Daily 6-45 am to 8-45 p.m "SAI SWACHARITHRA PARAYANAMU</span>                     
                     </a></p>-->
                  </div>
                </div>

            </section>                    