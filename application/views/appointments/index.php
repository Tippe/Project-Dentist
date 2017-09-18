<h2><?php echo $title; ?></h2>
 
<a class="btn btn-primary" href="<?php echo site_url('appointments/create/'); ?>" role="button">Create</a>

<table border='1' cellpadding='6' width='100%'>
    <tr>
        <td><strong>Date</strong></td>
        <td><strong>Time</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>User ID</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($appointments as $appointment): ?>
        <tr>
            <td><?php echo $appointment['date']; ?> </td>
            <td><?php echo $appointment['time']; ?> </td>
            <td><?php echo $appointment['description']; ?> </td>
            <td><?php echo $appointment['user_id']; ?> </td>
            <td>
                <a href="<?php echo site_url('appointments/view/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="<?php echo site_url('appointments/edit/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?php echo site_url('appointments/delete/'.$appointment['id']); ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
<?php endforeach; ?>
</table>