<!-- Main content -->
<section class="content container-fluid">
<?php echo validation_errors(); ?>
 
<?php echo form_open('backend/edit/'.$user['id']); ?>
    <table>
        <tr>
            <td><label for="text">Username</label></td>
            <td><?php echo $user['username']; ?></td>
        </tr>

        <tr>
            <td><label for="text">Firstname</label></td>
            <td><input type="input" name="firstname" size="50" value="<?php echo $user['firstname'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">Prefix</label></td>
            <td><input type="input" name="prefix" size="50" value="<?php echo $user['prefix'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">Lastname</label></td>
            <td><input type="input" name="lastname" size="50" value="<?php echo $user['lastname'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">Email</label></td>
            <td><input type="input" name="email" size="50" value="<?php echo $user['email'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">Address</label></td>
            <td><input type="input" name="adress" size="50" value="<?php echo $user['adress'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">Postalcode</label></td>
            <td><input type="input" name="postalcode" size="50" value="<?php echo $user['postalcode'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">City</label></td>
            <td><input type="input" name="city" size="50" value="<?php echo $user['city'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">Phone</label></td>
            <td><input type="input" name="phone" size="50" value="<?php echo $user['phone'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit item" /></td>
        </tr>
    </table>
</form>
</section>
</div>