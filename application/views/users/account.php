<div class="container" style="text-align: center;">
	<h1 style="font-size:34pt;"><?= $title ?></h1>
	<br/>
    <section class="content container-fluid">
    	<td>
    		<a type="button" class="btn btn-primary" href=<?php echo site_url('appointments/changepassword'); ?> >Change Password</a>
    	</td>
        <br/>
        <table class="table table-bordered">
            <br />
            <tr>
                <td><strong>Username</strong></td>
		        <td><strong>Firstname</strong></td>
		        <td><strong>Prefix</strong></td>
		        <td><strong>Lastname</strong></td>
		        <td><strong>Email</strong></td>
		        <td><strong>Address</strong></td>
		        <td><strong>Phone</strong></td>
            </tr>
            <tr>
				<td><?php echo $users['username']; ?></td>
				<td><?php echo $users['firstname']; ?></td>
				<td><?php echo $users['prefix']; ?></td>
				<td><?php echo $users['lastname']; ?></td>
				<td><?php echo $users['email']; ?></td>
				<td><?php echo $users['adress']; ?></td>
				<td><?php echo $users['phone']; ?></td>
            </tr>
        </table>
    </section>
