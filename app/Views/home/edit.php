<?php App\Cores\Views::extend('master.app') ?>

<?php App\Cores\Views::startSection('content') ?>
<div class="row">
    <div class="col">
        <form action="/update/<?=$user->id?>" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?=$user->name?>" id="name" placeholder="Full Name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" value="<?=$user->email?>" id="email" placeholder="name@example.com">
        </div>
        <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
</div>
<?php App\Cores\Views::endSection() ?>


<?php App\Cores\Views::startSection('head') ?>
<style>
    h1 {
        color:red;
    }
</style>
<?php App\Cores\Views::endSection() ?>

<?php App\Cores\Views::startSection('js') ?>
<script>
    console.log('ini js')
</script>
<?php App\Cores\Views::endSection() ?>

