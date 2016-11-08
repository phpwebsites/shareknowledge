<section class="topad">
  <div class="container bgcolorwhite" style="padding-top: 15px;">
  	<div class="row">
		<div class="col-xs-4">
			<img src="<?php echo base_url(); ?>/uploads/Desert.jpg" style="width: 370px;">
		</div>
		<div class="col-xs-8">
		  <p class="text-justify">
			<?php echo strip_tags($topics->description); ?> 
		  </p>
		  <div class="text-right">
		  	<?php echo $topics->name; ?>. <?php $date = date_create($topics->createdon);
                              echo strtoupper(date_format($date, 'F jS,  Y')); ?>
		  </div>
		</div>
	</div>
	<div class="row">
	   <!-- <div class="col-xs-1">
		
	   </div> -->
	   <div class="col-xs-12 text-center">
	   <div class="fb-comments" data-href="http://localhost/sites/shareknowledge/<?php echo $topics->id  ?>" data-numposts="5">
	   </div>

	   </div>
	   <!-- <div class="col-xs-1">
	   	
	   </div> -->
	</div>
  </div>
	
</section>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=900151540085389";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>