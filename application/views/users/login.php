<div class="container">
    <div class="row">
        <br>
        <div class="col-md-3">
        <!-- left col -->
        </div>
        <div class="col-xs-6  well"> 
            <?php echo $this->session->flashdata('login_msg'); ?>
            <?php echo form_open('Auth/login'); ?>
            <fieldset>
                <legend class="text-center">Login</legend>
                <!-- username -->
                <div class="form-group">
                    <div class="row colbox">     
                            <label for="username" class="control-label">Username</label>
                            <input type="text" id="username" class="form-control" name="username" placeholder="username" value="<?php echo set_value('username') ?>"/>  
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                    </div>
                </div>
                
                 <!-- password -->
                <div class="form-group">
                    <div class="row colbox ">     
                        <label for="password" class="control-label">Password</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="password"/>   
                        <span class="text-danger"><?php echo form_error('password'); ?></span>
                    </div>
                </div>

                <br>
                <!-- signin button -->
                <div class="form-group">
                    <div class="row colbox text-center">
                        <input type="submit" id="btn_login" name="loginSubmit" value="Login" class="btn btn-primary btn-block"/>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
            <div class="text-center">
                <br>
                <a href="<?php echo base_url()?>Signup_Controller/index" >don't have an account, signup here</a>
            </div>
            
        </div>
        <div class="col-md-3">
             <!-- right col -->
        </div>
    </div>
</div>


     
  