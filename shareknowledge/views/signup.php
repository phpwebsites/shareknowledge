<section class="topad">
  <div class="container bgcolorwhite">
    <h3 class="text-center">Registration</h3>
    <div class="row">
      <div class="col-xs-3 text-center">
         <!-- <img src="<?php //echo base_url(); ?>assets/images/vad1.jpg"> -->
      </div>
      <div class="col-xs-6">
          <?php echo form_open('usercreate'); ?>
             
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
              <div class="form-group">
                <label for="pwd">Conform Password:</label>
                <input type="password" class="form-control" id="conformpwd" name="conformpwd">
              </div>
              
              <button type="submit" class="btn btn-default">Submit</button>
          <?php echo form_close(); ?>
      </div>
      <div class="col-xs-3 text-center">
        <!-- <img src="<?php //echo base_url(); ?>assets/images/vad2.jpg"> -->
      </div>
    </div>
    
  </div>
</section>

