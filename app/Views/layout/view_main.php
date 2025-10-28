<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
    <title><?= esc($title ?? 'My Website') ?></title>
    
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
   <link href="styles.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

    <?= $this->include('layout/header', ['activePage' => $activePage ?? '']) ?>

    <main class="py-5">
        <div class="container px-5">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <?= $this->include('layout/footer') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
   
    <script src="scripts.js"></script>
</body>
</html>