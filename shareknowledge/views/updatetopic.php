<section class="topad">
  <div class="container bgcolorwhite">
    <h3>Share Your Knowledge</h3>
    <div class="row">
      <div class="col-xs-3 text-center">
         <img src="<?php echo base_url(); ?>assets/images/vad1.jpg">
      </div>
      <div class="col-xs-6">
          <?php echo form_open_multipart('topiccreate'); ?>
              <div class="form-group">
                <label for="email">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $topics->name; ?>">
                <?php echo form_error('name'); ?>
              </div>
              <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $topics->email; ?>">
                <?php echo form_error('email'); ?>
              </div>
              <div class="form-group">
                <label for="pwd">Phone Number:</label>
                <input type="text" class="form-control" id="phno" name="phno" value="<?php echo $topics->phoneno; ?>">
                <?php echo form_error('phno'); ?>
              </div>
              <div class="form-group">
                <label for="pwd">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $topics->title; ?>">
                <?php echo form_error('title'); ?>
              </div>
              <div class="form-group">
                <label for="pwd">Description:</label>
                <!-- <input type="text" class="form-control" id="desc" name="desc"> -->
                <textarea class="form-control" id="description" name="description">
                   <?php echo $topics->description;  ?>
                </textarea>
                <?php echo form_error('description'); ?>
              </div>
              <div class="form-group">
                <label for="img">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="<?php echo base_url(); ?>/uploads/<?php echo $topics->image; ?>" id="updateimage">
                <?php echo form_error('image'); ?>
              </div>
               <div class="form-group">
                <label for="pwd">Linkedin:</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php echo $topics->linkedin; ?>">
              </div>
               <div class="form-group">
                <label for="pwd">Facebook:</label>
                <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $topics->facebook; ?>">
              </div>
               <div class="form-group">
                <label for="pwd">Twitter:</label>
                <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $topics->twitter; ?>">
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

