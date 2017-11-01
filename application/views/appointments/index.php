<div class="container">

    <h1 class="title"><?= $title ?></h1>

    <br />

    <a type="button" class="btn btn-success" href=<?php echo base_url('appointments/create'); ?> >Create</a>

    <section class="content container-fluid">
    <table class="table table-bordered">

    <tr>
        <td><strong>Date</strong></td>
        <td><strong>Time</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>User ID</strong></td>
        <td><strong>Dentist Id</strong></td>
        <td><strong>Actions</strong></td>

    </tr>
    <?php foreach ($appointments as $appointment): ?>
    <tr>
        <td><?php echo $appointment['date']; ?></td>
        <td><?php echo $appointment['time']; ?></td>
        <td><?php echo $appointment['description']; ?></td>
        <td><?php echo $appointment['user_id']; ?></td>
        <td><?php echo $appointment['dentist_id']; ?></td>

        <td>
            <a href="<?php echo site_url('appointments/view/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
            <a href="<?php echo site_url('appointments/edit/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="<?php echo site_url('appointments/delete/'.$appointment['id']); ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
        </td>
    </tr>
    <?php endforeach; ?>
</div>

</table>
</section>