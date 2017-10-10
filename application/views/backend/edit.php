    <!-- Main content -->
    <section class="content container-fluid">
<?php echo validation_errors(); ?>
 
<?php echo form_open('backend/edit/'.$user['id']); ?>    <table>

        <tr>
            <td><label for="title">username</label></td>
            <td><input type="input" name="username" size="50" value="<?php echo $user['username'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">firstname</label></td>
            <td><input type="input" name="firstname" size="50" value="<?php echo $user['firstname'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">prefix</label></td>
            <td><input type="input" name="prefix" size="50" value="<?php echo $user['prefix'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">lastname</label></td>
            <td><input type="input" name="lastname" size="50" value="<?php echo $user['lastname'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">email</label></td>
            <td><input type="input" name="email" size="50" value="<?php echo $user['email'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">adress</label></td>
            <td><input type="input" name="adress" size="50" value="<?php echo $user['adress'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">postalcode</label></td>
            <td><input type="input" name="postalcode" size="50" value="<?php echo $user['postalcode'] ?>" /></td>
        </tr>
                <tr>
            <td><label for="text">city</label></td>
            <td><input type="input" name="city" size="50" value="<?php echo $user['city'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">phone</label></td>
            <td><input type="input" name="phone" size="50" value="<?php echo $user['phone'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit item" /></td>
        </tr>
    </table>
</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Code Addicts</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url () . 'css/jquery.min.js';?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url () . 'css/bootstrap.min.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url () . 'css/adminlte.min.js';?>"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>