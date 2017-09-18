<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('appointments/create'); ?>    
    <table>
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
            <td></td>
            <td><input type="submit" name="submit" value="Create appointment" /></td>
        </tr>
    </table>    
</form>