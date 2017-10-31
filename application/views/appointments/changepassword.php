<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-12 .col-md-8-centered well">
            <?php echo form_open('appointments/changepassword') ?>
            <fieldset>
                <legend class="text-center"><h1 class="title">Change Password</h1></legend>
                <!-- user name -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="current_password" class="control-label">Current password:</label>
                            <input class="form-control" id="current_password" name="current_password" placeholder="Password" type="password" value="<?php echo set_value('current_password'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('current_password'); ?></span>
                        </div>
                    </div>
                </div>
                </br>
                <!-- user address -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="new_password" class="control-label">New password</label>
                            <input class="form-control" id="new_password" name="new_password" placeholder="Password" type="password" value="<?php echo set_value('new_password'); ?>" />  
                            <span class="text-danger"><?php echo form_error('new_password'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- user email -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="new_password_2" class="control-label">New password repeat</label>
                            <input class="form-control" id="new_password_2" name="new_password_2" placeholder="Password" value="<?php echo set_value('new_password_2'); ?>" type="password" />
                            <span class="text-danger"><?php echo form_error('new_password_2'); ?></span>
                        </div>
                    </div>
                </div>
                 <!-- signup button -->
                <div class="form-gruop">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <input id="btn_signup" name="btn_signup" type="submit" class="btn btn-primary col-xs-12 .col-md-8" value="Change Password" />
                        </div>
                    </div>
                </div>


            </fieldset>
            <?php echo form_close(); ?>
             <div class="text-center">
            </div>
            
        </div>
    </div>

</div>