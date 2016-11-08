<section>
	<div class="container bgcolorwhite">
		<h1>Online Education</h1>
		<hr>
		<div class="row articels">
			<div class="col-xs-8 ">
				<div class="bgimage">
					<h3 class="text-center">The Joy of Connecting Students to a Good Teacher via Technology!</h3>
					<div class="avathar">
					    <img src="<?php echo base_url(); ?>assets/images/avatar.jpg" class="img-circle" style="width: 25px;">
						<span>ramu</span>
						<span class="date">SEPTEMBER 28, 2016</span>
					</div>
				</div>
				<div class="row">
				<h3 class="col-xs-10 subheding">NEWS AND ARTICLES ABOUT ONLINE EDUCATION</h3>
				</div>
			<?php foreach($topic_result as $topicresult){ ?>
				<div class="row articels">
					<div class="col-xs-5">
						<img src="<?php echo base_url(); ?>uploads/<?php echo $topicresult->image; ?>" width="274" height="183">
					</div>
					<div class="col-xs-7">
					    <!-- <label class="smallheading">Lorumipsum</label> -->
						<h4 class="text-justify">
						  <a href="" class="anchorcolor"><?php echo $topicresult->title; ?></a>
						</h4>
						<div class="text-justify">
						  
						   <?php 
						      echo word_limiter(strip_tags($topicresult->description,19));
						   ?>
						   <a href="<?php echo base_url('shareknowldge/'.$topicresult->id); ?>">Readmore </a>
						  
						</div>
						<div class="avatar1">
							<img src="<?php echo base_url(); ?>assets/images/avatar.jpg" class="img-circle" style="width: 25px;">
							<span><?php echo $topicresult->name;  ?></span>
						    <span class="date">
						      <?php
						      $date = date_create($topicresult->createdon);
                              echo strtoupper(date_format($date, 'F jS,  Y'));
                              ?>
						      <?php //echo date_format($date,"Y/m/d H:i:s"); ?>
						    </span>
						</div>
						<?php  if($this->session->userdata('userid') != ""){ ?>
							<?php if($this->session->userdata('userid') == 	$topicresult->userid){ ?>
						<div class="rdwricons">
							<a href="<?php echo base_url('edit/'.$topicresult->id); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a href="<?php echo base_url('topicdel/'.$topicresult->id); ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</div>
						    <?php } ?>
						<?php } ?>
					</div>
				</div>
				<hr>
			<?php } ?>
			</div>

				
			<div class="col-xs-4">
			  <div class="row text-center ads">
			  	<img src="<?php echo base_url(); ?>assets/images/ad1.jpg">
			  	<hr>
			  </div>
			  <div class="row">
			    <h3>Videos You may like</h3>
			  	<!-- <img src="images/ad1.jpg"> -->
			  	<div class="row">
			  		<div class="col-xs-6">
			  			<img src="<?php echo base_url(); ?>assets/images/video1.jpg" width="180">
			  			<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
			  		</div>
			  		<div class="col-xs-6">
			  			<img src="<?php echo base_url(); ?>assets/images/video2.png" width="180">
			  			<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
			  		</div>
			  		
			  	</div>
			  	<div class="row">
			  		<div class="col-xs-6">
			  			<img src="<?php echo base_url(); ?>assets/images/video3.jpg" width="180">
			  			<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
			  		</div>
			  		<div class="col-xs-6">
			  			<img src="<?php echo base_url(); ?>assets/images/video4.jpg" width="180">
			  			<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
			  		</div>
			  		
			  	</div>
			  	<hr>
			  </div>
				
			</div>
		</div>
	</div>
</section>