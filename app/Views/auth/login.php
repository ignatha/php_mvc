<?php App\Cores\Views::extend('master.app') ?>

<?php App\Cores\Views::startSection('content') ?>
<div class="row">
    <div class="col">
        <form action="/login" method="post">
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
        <input type="submit" class="btn btn-success" value="Login">
        </form>
    </div>
</div>
<?php App\Cores\Views::endSection() ?>
