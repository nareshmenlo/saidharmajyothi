<?php
if($this->session->userdata('logged_in'))
{
	redirect('admin/dashboard','refresh');
}
	//$session_data =$this->session->userdata('logged_in');
	else
	{
	
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Admin Panel</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="<?php echo base_url(); ?>public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>public/assets/css/metro.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>public/assets/css/style.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>public/assets/css/style_responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>public/assets/css/style_default.css" rel="stylesheet" id="style_color" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/uniform/css/uniform.default.css" />
  <!--<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>public/favicon.ico">-->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
  <!-- BEGIN LOGO -->
  <div class="logo">
    <img src="<?php echo base_url(); ?>public/images/logo.png" alt="" width="800" height="300"/>
  </div>
  <!-- END LOGO -->
  <!-- BEGIN LOGIN -->
  <div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form  method="post" action="<?php echo base_url(); ?>login_admin">
      <h3 class="form-title">Login to your account</h3>
      <div class="alert alert-error hide">
        <button class="close" data-dismiss="alert"></button>
        <span>Enter any username and passowrd.</span>
      </div>
      <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="username" name="username" value="<?php echo set_value('username'); ?>" />
            <?php echo form_error('username') ?> 
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"/>
            <?php echo form_error('password') ?>
          </div>
        </div>
      </div>
      <div class="form-actions">
        <!--<label class="checkbox">
        <input type="checkbox" name="remember" value="1"/> Remember me
        </label>-->
        <button type="submit" class="btn green pull-right">    Login <i class="m-icon-swapright m-icon-white"></i>   </button>            
      </div>
    </form>
    <!-- END LOGIN FORM -->        
    <!-- BEGIN FORGOT PASSWORD FORM -->
   
    <!--<form class="" method="post" action="<?php echo base_url(); ?>admin/forgotpassword">
      <h3 class="">Forget Password ?</h3>
      <p>Enter your e-mail address below to reset your password.</p>
       <div style="color:#F00;"><?php
	echo $this->session->flashdata('msg');
	?></div>
      <div class="control-group">
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-envelope"></i>
            
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>"/>
          <div style="color:#F00;"><p><?php echo form_error('email'); ?></p> </div>
          </div>
        </div>
      </div>
      <div class="form-actions">
        <button type="button" id="back-btn" class="btn">
        <i class="m-icon-swapleft"></i> Back
        </button>
        <button type="submit" class="btn green pull-right">
        Submit <i class="m-icon-swapright m-icon-white"></i>
        </button>            
      </div>
    </form>-->
    <!-- END FORGOT PASSWORD FORM -->
    <!-- BEGIN REGISTRATION FORM -->
    <form class="form-vertical register-form" action="">
      <h3 class="">Sign Up</h3>
      <p>Enter your account details below:</p>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="password" id="register_password" placeholder="Password" name="password"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-ok"></i>
            <input class="m-wrap placeholder-no-fix" type="password" placeholder="Re-type Your Password" name="rpassword"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-envelope"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <label class="checkbox">
          <input type="checkbox" name="tnc"/> I agree to the <a href="">Terms of Service</a> and <a href="#">Privacy Policy</a>
          </label>  
          <div id="register_tnc_error"></div>
        </div>
      </div>
      <div class="form-actions">
        <button id="register-back-btn" type="button" class="btn">
        <i class="m-icon-swapleft"></i>  Back
        </button>
        <button type="submit" id="register-submit-btn" class="btn green pull-right">
        Sign Up <i class="m-icon-swapright m-icon-white"></i>
        </button>            
      </div>
    </form>
    <!-- END REGISTRATION FORM -->
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div class="copyright">
   <!-- 2014 &copy; Metronic.--> <!--Admin Dashboard Template.-->
  </div>
  <!-- END COPYRIGHT -->
  <!-- BEGIN JAVASCRIPTS -->
  <script src="<?php echo base_url(); ?>public/assets/js/jquery-1.8.3.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/bootstrap/js/bootstrap.min.js"></script>  
  <script src="<?php echo base_url(); ?>public/assets/uniform/jquery.uniform.min.js"></script> 
  <script src="<?php echo base_url(); ?>public/assets/js/jquery.blockui.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>public/assets/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>public/assets/js/app.js"></script>
  <script>
    jQuery(document).ready(function() {     
      App.initLogin();
    });
  </script>
  <?php } ?>
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>