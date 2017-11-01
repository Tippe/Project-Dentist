<div class="container">

    <h1 class="title"><?= $title ?></h1>

    <br />

   <section class="content container-fluid">
   <table class="table table-bordered">

    <tr>
        <td class="bold">Date</td>
        <td class="bold">Time</td>
        <td class="bold">Description</td>
        <td class="bold">User ID</td>
        <td class="bold">Dentist Id</td>
    </tr>
	<tr>
		<td><?php echo $appointment['date']; ?></td>
		<td><?php echo $appointment['time']; ?></td>
		<td><?php echo $appointment['description']; ?></td>
		<td><?php echo $appointment['user_id']; ?></td>
		<td><?php echo $appointment['dentist_id']; ?></td>
	</tr>
</table>
	    <a type="button" class="btn btn-success" href=<?php echo base_url('appointments/index'); ?> >Back</a>


