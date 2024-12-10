<?php App\Cores\Views::extend('master.app') ?>

<?php App\Cores\Views::startSection('content') ?>
<div>
    <h1>ini adalah halaman section content Product</h1>
    <span><?=$product?></span>
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

