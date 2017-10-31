<div class="container">

    <h1 class="title"><?= $title ?></h1>

    <br />

    <a type="button" class="btn btn-success" href=<?php echo base_url('appointments/create'); ?> >Create</a>

    <section class="content container-fluid">
    <table class="table table-bordered">

    <div class="row">
        <div class="col-md-2">
            <p>Date</p>
        </div>
        <div class="col-md-1">
            <p>Time</p>
        </div>
        <div class="col-md-3">
            <p>Description</p>
        </div>
        <div class="col-md-2">
            <p>User ID</p>
        </div>
        <div class="col-md-2">
            <p>Dentist ID</p>
        </div>
        <div class="col-md-2">
            <p>Actions</p>
        </div>
        
    </div>
    <?php foreach ($appointments as $appointment): ?>
    <div class="row">
        <div class="col-md-2">
            <p><?php echo $appointment['date']; ?></p>
        </div>
        <div class="col-md-1">
            <p><?php echo $appointment['time']; ?></p>
        </div>
        <div class="col-md-3">
            <p><?php echo $appointment['description']; ?></p>
        </div>
        <div class="col-md-2">
            <p><?php echo $appointment['user_id']; ?></p>
        </div>
        <div class="col-md-2">
            <p><?php echo $appointment['dentist_id']; ?></p>
        </div>
        <div class="col-md-2">
            <a href="<?php echo site_url('appointments/view/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
            <a href="<?php echo site_url('appointments/edit/'.$appointment['id']); ?>"><span class="glyphicon glyphicon-pencil"></span></a>
            <a href="<?php echo site_url('appointments/delete/'.$appointment['id']); ?>" onClick="return confirm('Are you sure you want to delete?')"><span class="glyphicon glyphicon-trash"></span></a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

</table>
</section>