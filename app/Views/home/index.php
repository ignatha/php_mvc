<?php App\Cores\Views::extend('master.app') ?>

<?php App\Cores\Views::startSection('content') ?>
<div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index => $user): ?>
                    <tr>
                        <td><?=$index+1?></td>
                        <td><?=$user->name?></td>
                        <td><?=$user->email?></td>
                        <td><?=$user->password?></td>
                    </tr>  
            <?php endforeach; ?>
            <tr></tr>
        </tbody>
    </table>
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

