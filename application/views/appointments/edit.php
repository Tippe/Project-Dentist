<div class="container">
    <div class="row">
        <div class="col-xs-12 .col-md-8-centered well">
            <?php echo validation_errors(); ?>
            <?php echo form_open('appointments/edit/'.$appointment['id']); ?>
            <fieldset>
                <legend class="text-center"><h1 class="title"><?php echo $title; ?></h1></legend>
                <!-- Date -->
                <div class="form-group">
                    <div class="row colbox">     
                        <label for="date" class="control-label">Date</label>
                        <input type="text" id="date" class="form-control" name="date" value="<?php echo $appointment['date'] ?>"/>  
                    </div>
                </div>
                
                 <!-- Time -->
                <div class="form-group">
                    <div class="row colbox ">     
                        <label for="time" class="control-label">Time</label>
                        <input type="time" id="time" class="form-control" name="time" value="<?php echo $appointment['time'] ?>"/>   
                    </div>
                </div>

                <!-- Description -->
                <div class="form-group">
                    <div class="row colbox">   
                        <label for="description">Description</label>
                        <input type="description" id="description" class="form-control" name="description" value="<?php echo $appointment['description'] ?>"" rows="4" cols="50"/>
                    </div>
                </div>

                <!-- User ID -->
                <div class="form-group">
                    <div class="row colbox">   
                        <label for="user_id">User ID</label>
                        <input type="user_id" id="user_id" class="form-control" name="user_id" value="<?php echo $appointment['user_id'] ?>"/>   
                    </div>
                </div>

                <!-- Dentist ID -->
                <div class="form-group">
                    <div class="row colbox">   
                        <label for="dentist_id">Dentist ID</label>
                        <input type="dentist_id" id="dentist_id" class="form-control" name="dentist_id" value="<?php echo $appointment['user_id'] ?>"/>   
                    </div>
                </div>

                <br>
                <!-- submit button -->
                <div class="form-group">
                    <div class="row colbox text-center">
                        <input type="submit" id="submit" name="submit" value="Edit Appointment" class="btn btn-primary btn-block"/>
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>