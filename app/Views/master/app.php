<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <?php App\Cores\Views::yieldSection('head') ?>
</head>
<body>
    <?php App\Cores\Views::include('master.header') ?>
    <div class="container-fluid">
        <?php App\Cores\Views::yieldSection('content') ?>
    </div>
    <?php App\Cores\Views::include('master.footer') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php App\Cores\Views::yieldSection('js') ?>
</body>
</html>