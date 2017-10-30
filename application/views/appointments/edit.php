<div class="container" style="text-align: center;">
    <h1 style="font-size:34pt;"><?= $title ?></h1>    
<br />
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('appointments/edit/'.$appointment['id']); ?>
    <table class="col-xs-12">
        <tr>
            <td><label for="date">Date</label></td>
            <td><input type="input" name="date" size="50" value="<?php echo $appointment['date'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="time">Time</label></td>
            <td><input type="input" name="time" size="50" value="<?php echo $appointment['time'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><input type="input" name="description" size="50" value="<?php echo $appointment['description'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="user_id">UserID</label></td>
            <td><input type="input" name="user_id" size="50" value="<?php echo $appointment['user_id'] ?>" /></td>
        </tr>        
        <tr>
            <td><label for="dentist_id">dentist_id</label></td>
            <td><input type="input" name="dentist_id" size="50" value="<?php echo $appointment['dentist_id'] ?>" /></td>
        </tr>
    </table>
        <br />
        <input type="submit" name="submit" value="Edit appointment" class="btn btn-success" />
</form>
</div>