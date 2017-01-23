      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8-col-sm-12">
            <h3>Latest Events</h3>
            <?php
			$view_events=$this->user_model->view_latestevents();
			foreach($view_events as $events)
			{
			$from_date=$events->from_date;
			$f_date=date('Y-m-d h:i A',strtotime($from_date));
			$to_date=$events->to_date;
			$t_date=date('Y-m-d h:i A',strtotime($to_date));
			?>
            <div class="box"> <img src="<?php echo base_url(); ?>public/address/<?php echo $events->image; ?>" width="41" height="41" alt="image description" class="alignleft">
              <div class="text">
                <p><?php echo $events->name; ?>, <?php echo strip_tags(stripslashes($events->content)); ?><?php echo $f_date; ?> To <?php echo $t_date; ?></p>
              </div>
            </div>
            <?php } ?>
            
          </div>
          <div class="col-lg-4 col-md-4-col-sm-12">
            <audio controls>
              <source src="http://saidharmajyothi.com/audio/Om Shree Sainathaya Namah Sai Maha Mantra ( Sai Chants ).mp3" type="audio/mpeg">
            Your browser does not support the audio element.
            </audio>
          </div>
        </div>
      </div>