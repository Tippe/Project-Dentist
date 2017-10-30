<div class="container" style="text-align: center;">
    <h1 style="font-size:34pt;"><?= $title ?></h1>
<br />
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('appointments/create'); ?>    
    <table class="col-xs-12">
        <tr>
            <td><label for="date">Date</label></td>
            <td><input type="input" name="date" size="50" /></td>
        </tr>
        <tr>
            <td><label for="time">Time</label></td>
            <td><input type="input" name="time" size="50" /></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><textarea type="input" name="description" rows="4" cols="50"></textarea></td>
        </tr>
        <tr>
            <td><label for="user_id">UserID</label></td>
            <td><input type="input" name="user_id" size="50" /></td>
        </tr>        
        <tr>
            <td><label for="dentist_id">dentist_id</label></td>
            <td><input type="input" name="dentist_id" size="50" /></td>
        </tr>
        <div />
        <tr>
            <td></td>
            <td><br/><input type="submit" name="submit" value="Create appointment" class="btn btn-success" /></td>
        </tr>
    </table>    
</form>