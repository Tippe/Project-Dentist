<h2><?php echo $title; ?></h2>

<table border='1' cellpadding='5' width='100%'>
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