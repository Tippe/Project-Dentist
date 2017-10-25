<div class="container">
    <div class="row">
        <br>
        <div class="col-xs-12 .col-md-8-centered well">

            <?php echo $this->session->flashdata('succeed'); ?>
            <?php echo form_open('backend/create') ?>
            
            <fieldset>
                <legend class="text-center">Create User Account</legend>
                <!-- user name -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="username" class="control-label">Username</label>
                            <input class="form-control" id="txt_empname" name="username" placeholder="Name" type="text" value="<?php echo set_value('username'); ?>" /> 
                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- user address -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="password" class="control-label">Password</label>
                            <input class="form-control" id="password" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />  
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- user email -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="password2" class="control-label">Password herhalen</label>
                            <input class="form-control" id="txt_email" name="password2" placeholder="Password" value="<?php echo set_value('password2'); ?>" type="password" />  
                            <span class="text-danger"><?php echo form_error('password2'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- user username -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="firstname" class="control-label">Firstname</label>
                            <input class="form-control" id="firstname" name="firstname" placeholder="Firstname" type="text" value="<?php echo set_value('firstname'); ?>" />  
                            <span class="text-danger"><?php echo form_error('firstname'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="prefix" class="control-label">Prefix</label>
                            <input class="form-control" id="prefix" name="prefix" placeholder="Prefix" type="text" value="<?php echo set_value('prefix'); ?>" />  
                            <span class="text-danger"><?php echo form_error('prefix'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="lastname" class="control-label">Lastname</label>
                            <input class="form-control" id="lastname" name="lastname" placeholder="Lastname" type="text" value="<?php echo set_value('lastname'); ?>" />  
                            <span class="text-danger"><?php echo form_error('lastname'); ?></span>
                        </div>
                    </div>
                </div>
                <!-- user password -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="adress" class="control-label">Adress</label>
                            <input class="form-control" id="adress" name="adress" placeholder="Adress" type="text" value="<?php echo set_value('txt_password'); ?>"/>  
                            <span class="text-danger"><?php echo form_error('adress'); ?></span>
                        </div>
                    </div>
                </div>
                
                <!-- user confirm password -->
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="city" class="control-label">City</label>
                            <input class="form-control" id="city" name="city" placeholder="City" type="text" value="<?php echo set_value('city'); ?>"/> 
                            <span class="text-danger"><?php echo form_error('city'); ?></span>
                        </div>
                    </div>
                </div>
                                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="postalcode" class="control-label">Postalcode</label>
                            <input class="form-control" id="postalcode" name="postalcode" placeholder="Postalcode" type="text" value="<?php echo set_value('city'); ?>"/> 
                            <span class="text-danger"><?php echo form_error('city'); ?></span>
                        </div>
                    </div>
                </div>
                                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="email" class="control-label">E-mail</label>
                            <input class="form-control" id="email" name="email" placeholder="E-mail" type="text" value="<?php echo set_value('email'); ?>"/> 
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>
                    </div>
                </div>

                             <div class="form-group">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <label for="phone" class="control-label">Phone</label>
                            <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" value="<?php echo set_value('phone'); ?>"/> 
                            <span class="text-danger"><?php echo form_error('phone'); ?></span>
                        </div>
                    </div>
                </div>
                <br>
                <!-- signup button -->
                <div class="form-gruop">
                    <div class="row colbox">
                        <div class="col-xs-12 .col-md-8">
                            <input id="btn_signup" name="btn_signup" type="submit" class="btn btn-primary col-xs-12 .col-md-8" value="Signup" />
                            <br><br>
                            <input type="reset" id="btn_reset" name="btn_reset" class="btn btn-default col-xs-12 .col-md-8" value="Cancel"/>
                        </div>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>