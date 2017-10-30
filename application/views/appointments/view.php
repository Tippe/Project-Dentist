<div class="container" style="text-align: center;">
    <h1 style="font-size:34pt;"><?= $title ?></h1>
<br>    

 <section class="content container-fluid">
        <table class="table table-bordered">
    <tr>
        <td><strong>Date</strong></td>
        <td><strong>Time</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>User ID</strong></td>
        <td><strong>Dentist Id</strong></td>
    </tr>
	<tr>
		<td><?php echo $appointment['date']; ?></td>
		<td><?php echo $appointment['time']; ?></td>
		<td><?php echo $appointment['description']; ?></td>
		<td><?php echo $appointment['user_id']; ?></td>
		<td><?php echo $appointment['dentist_id']; ?></td>
	</tr>
</table>
