<!DOCTYPE html>
<html>
<head>
	<title>News Report</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</head>
<body>
<header class="head">
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:white;">Logo Name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li>
             <?php if($this->session->userdata('userid') == ""){ ?>
               <a href="javascript:void(0)" onclick="return confirm('Please do the login after share your Knowledge');">Share Knowledge</a>
             <?php } else{ ?>
               <a href="<?php echo base_url('Shareknowldge'); ?>">Share Knowledge</a>
             <?php } ?>
            </li>
            <li><a href="#contact">Contact</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">

            <?php if($this->session->userdata('userid') == ""){ ?>

              <li><a href="<?php echo base_url('login'); ?>"><strong>Login</strong></a></li>
              <li><a href="<?php echo base_url('signup'); ?>"><strong>Register</strong></a></li>
            <?php }else{ ?>
              <li><a href="<?php echo base_url('logout'); ?>"><strong>Logout</strong></a></li>
            <?php } ?>
            <li><a href="../navbar-static-top/"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
            <li><a href="./"><i class="fa fa-search" aria-hidden="true"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>
<section><!-- ad start -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<!-- <p>ads space......</p> -->
				<img src="<?php echo base_url(); ?>assets/images/verticalad.jpg">
			</div>
		</div>
	</div>
</section><!-- ad end -->