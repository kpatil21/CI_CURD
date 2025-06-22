
    <div class="container">
          <h1>Registration Form</h1>
          <div class="user_form">
          
             <form action="<?php echo base_url('Registration/add'); ?>" method="post">
              
                  <?php 
            if($this->session->set_flashdata('success_message')){
               echo  $this->session->set_flashdata('success_message');
                echo 'In';
            }  
            ?>
            
                <div class="input-group row">   
                    <div class="col-sm-1"></div>  
                    <label for="username" class="col-sm-3">Enter Username:</label>
                    <div class="col-sm-4">
                         <input type="text" class="form-control" placeholder="username" id="username" name="username" value="<?php echo set_value('username'); ?>">
                          <?php echo form_error('username'); ?>
                    </div>    
               </div><br>
                <div class="input-group row">  
                    <div class="col-sm-1"></div>   
                     <label for="email" class="col-sm-3">Enter Email:</label>  
                     <div class="col-sm-4">
                          <input type="text" class="form-control" placeholder="email" id="email" name="email" value="<?php echo set_value('email'); ?>">
                           <?php echo form_error('email'); ?>
                   </div>
               </div><br>
                <div class="input-group row">    
                <div class="col-sm-1"></div>  
                <label for="phone" class="col-sm-3">Enter Phone:</label> 
                <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="phone" id="phone" name="phone" value="<?php echo set_value('phone'); ?>">
                         <?php echo form_error('phone'); ?>
                </div>
               </div>
               <input  type="submit" name="submit" class="btn btn-primary" value="Add User">
               <input type="submit" name="back" class="btn btn-danger" value="Back">
             </form>
          </div>
    </div>
