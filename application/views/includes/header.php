<div class="topbar">
      <div class="container has-feedback">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-md-offset-4 text-center">
          	<div class="newlogo"><a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>public/images/logo.png" alt="" class="img-responsive"/></a></div>                 	
          </div>
        </div>
      </div>
    </div>
    <div class="container has-feedback">
      <!-- logo -->
    </div>
    <div class="container">
      <!-- main navigation -->
      <nav id="nav" class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <span class="title visible-xs">Menu</span> </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>home">Home</a></li>             
              <li><a href="<?php echo base_url(); ?>aboutus">About Us</a>
              	<ul class="dropdown-menu" role="menu">
                	<li><a href="<?php echo base_url(); ?>gurubandham">Gurubandham</a></li>
                </ul>
              </li>
              <li><a href="#">Articles</a>
              	<ul class="dropdown-menu" role="menu">
                <?php
				$view_articles=$this->user_model->view_articles();
				foreach($view_articles as $art)
				{
				?>
                      <li><a href="<?php echo base_url(); ?>articles_view/<?php echo $art->sno; ?>/<?php echo $art->url; ?>"><?php echo $art->name; ?></a></li>
                      <?php } ?>
                      <?php /*?><li><a href="<?php echo base_url(); ?>saisahavasam">Sai Sahavasam</a></li>
                      <li><a href="<?php echo base_url(); ?>saiswarupam">Sai Swarupam</a></li>
                      <li><a href="<?php echo base_url(); ?>saibhavishyavani">Sai Bhavishya Vani</a></li>
                      <li><a href="<?php echo base_url(); ?>nenuundagabhayamledu">Nenu Undaga BhayamEla</a></li><?php */?>
                      <li><a href="<?php echo base_url(); ?>nityaacharaneeyadharmamulu">Nitya Acharaneeya Dharmamulu</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url(); ?>ourprogrames">Our Programmes</a>
              	<ul class="dropdown-menu" role="menu">
                <?php
				$view_programes=$this->user_model->view_programes();
				foreach($view_programes as $pro)
				{
				?>
                	<li><a href="<?php echo base_url(); ?>our_programes/<?php echo $pro->sno; ?>/<?php echo $pro->url; ?>"><?php echo $pro->name; ?></a></li>
                    <?php } ?>
                    <?php /*?><li><a href="<?php echo base_url(); ?>saiparivar">Sai Parivar</a></li><?php */?>
                </ul>
              </li>
              <li><a href="<?php echo base_url(); ?>recentevents">Recent Events</a></li>
              <li><a href="<?php echo base_url(); ?>specialprogrames">Special Programmes</a></li>
              <li><a href="#">Gallery</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url(); ?>photogallery">Photo Gallery</a></li>
                  <li><a href="<?php echo base_url(); ?>videogallery">Video Gallery</a></li>
                  <li><a href="<?php echo base_url(); ?>audiogallery">Audio Gallery</a></li>
                  <li><a href="<?php echo base_url(); ?>babararephotos">Baba Rare Photos</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url(); ?>contactus">Contact Us</a></li>
              <li><a href="<?php echo base_url(); ?>telugu">తెలుగు వెర్షన్</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>