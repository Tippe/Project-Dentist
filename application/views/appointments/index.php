<div class="container" style="text-align: center;">
<h1 style="font-size:34pt;"><?= $title ?></h1>

<br>
<a type="button" class="btn btn-success" href=<?php echo site_url('appointments/create'); ?> >Create</a>

<section class="content container-fluid">
<table class="table table-bordered">
    <br>
    <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Description</th>
        <th>User ID</th>
        <th>Dentist Id</th>
        <th>Actions</th>
    </tr>
<?php foreach ($appointments as $appointment): ?>

        <tr>
            <td><p><?php echo $appointment['date']; ?></p></td>
            <td><p><?php echo $appointment['time']; ?></p></td>
            <td><p><?php echo $appointment['description']; ?></p></td>
            <td><p><?php echo $appointment['user_id']; ?></p></td>
            <td><p><?php echo $appointment['dentist_id']; ?></p></td>
            <td>
                <a href="<?php echo site_url('appointments/view/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                <a href="<?php echo site_url('appointments/edit/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?php echo site_url('appointments/delete/'.$appointment['id']); ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</section>