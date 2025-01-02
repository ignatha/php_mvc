<?php App\Cores\Views::extend('master.app') ?>

<?php App\Cores\Views::startSection('content') ?>
<div class="row">
    <div class="col">
        <form action="/add" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
            <!-- Menampilkan pesan error -->
            <?php if ($error = App\Cores\Flash::get('error_name')): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com">
            <!-- Menampilkan pesan error -->
            <?php if ($error = App\Cores\Flash::get('error_email')): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
            <!-- Menampilkan pesan error -->
            <?php if ($error = App\Cores\Flash::get('error_password')): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
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

