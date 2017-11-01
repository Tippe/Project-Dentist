<div class="container">
<?php echo $this->session->flashdata('created'); ?>
    <h1 class="title"><?= $title ?></h1>

    <br />

    <a type="button" class="btn btn-success" href=<?php echo base_url('appointments/create'); ?> >Create</a>

    <section class="content container-fluid">
    <table class="table table-bordered">

    <tr>
        <td class="bold">Date</td>
        <td class="bold">Time</td>
        <td class="bold">Description</td>
        <td class="bold">User ID</strong></td>
        <td class="bold">Dentist Id</td>
        <td class="bold">View</td>
        <td class="bold">Edit</td>
        <td class="bold">Delete</td>

    </tr>
    <?php foreach ($appointments as $appointment): ?>
    <tr>
        <td><?php echo $appointment['date']; ?></td>
        <td><?php echo $appointment['time']; ?></td>
        <td><?php echo $appointment['description']; ?></td>
        <td><?php echo $appointment['user_id']; ?></td>
        <td><?php echo $appointment['dentist_id']; ?></td>
        <td><a href="<?php echo site_url('appointments/view/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-eye-open"></span></a></td>
        <td><a href="<?php echo site_url('appointments/edit/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
        <td><a href="<?php echo site_url('appointments/delete/'.$appointment['id']); ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a></td>
    </tr>
    <?php endforeach; ?>
</div>

</table>
</section>