    <!-- Main content -->
    <section class="content container-fluid">
    <table class="table table-bordered">
            <tr>
                <th>Username</th>
                <th>Firstname</th>
                <th>Prefix</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Postalcode</th>
                <th>City</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
      <tr>
<?php foreach ($users as $user): ?>
            <td><p><?php echo $user['username']; ?></p></td> 
            <td><p><?php echo $user['firstname']; ?></p></td>
            <td><p><?php echo $user['prefix']; ?></p></td>
            <td><p><?php echo $user['lastname']; ?></p></td>
            <td><p><?php echo $user['email']; ?></p></td>
            <td><p><?php echo $user['adress']; ?></p></td>
            <td><p><?php echo $user['postalcode']; ?></p></td>
            <td><p><?php echo $user['city']; ?></p></td> 
            <td><p><?php echo $user['phone']; ?></p></td> 
            <td><p><?php echo $user['role_id']; ?></p></td> 
            <td><a href="<?php echo site_url('backend/edit/'.$user['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="<?php echo site_url('backend/delete/'.$user['id']); ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a></td>

      </tr>
      <?php endforeach; ?>
    </table>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

