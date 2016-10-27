<section class="topad">
  <div class="container bgcolorwhite">
    <h3>Share Your Knowledge</h3>
    <div class="row">
      <div class="col-xs-3 text-center">
         <img src="<?php echo base_url(); ?>assets/images/vad1.jpg">
      </div>
      <div class="col-xs-6">
          <?php echo form_open('topiccreate'); ?>
              <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="pwd">Phone Number:</label>
                <input type="text" class="form-control" id="phno" name="phno">
              </div>
              <div class="form-group">
                <label for="pwd">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="form-group">
                <label for="pwd">Description:</label>
                <!-- <input type="text" class="form-control" id="desc" name="desc"> -->
                <textarea class="form-control" id="description" name="description">
                  
                </textarea>
              </div>
               <div class="form-group">
                <label for="pwd">Linkedin:</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin">
              </div>
               <div class="form-group">
                <label for="pwd">Facebook:</label>
                <input type="text" class="form-control" id="facebook" name="facebook">
              </div>
               <div class="form-group">
                <label for="pwd">Twitter:</label>
                <input type="text" class="form-control" id="twitter" name="twitter">
              </div>
              
              <button type="submit" class="btn btn-default">Submit</button>
          <?php echo form_close(); ?>
      </div>
      <div class="col-xs-3 text-center">
        <img src="<?php echo base_url(); ?>assets/images/vad2.jpg">
      </div>
    </div>
    
  </div>
</section>

