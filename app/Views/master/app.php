<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan</title>
    <?php App\Cores\Views::yieldSection('head') ?>
</head>
<body>
    <?php App\Cores\Views::yieldSection('content') ?>
    <?php App\Cores\Views::include('master.footer') ?>
    <?php App\Cores\Views::yieldSection('js') ?>
</body>
</html>