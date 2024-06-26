<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title; ?> - Mehdi Shop</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="<?= CHEMIN_VUES . 'assets/favicon.ico'; ?>" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- Bootstrap icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
        <!-- Core theme CSS -->
        <link href="<?= CHEMIN_STYLES . 'styles.css'; ?>" rel="stylesheet" />
    </head>
    <body>
        <?php require_once(CHEMIN_VUES . 'header.php'); ?>
        <main role="main" tabindex="-1" id="main">
            <?= $content; ?>
        </main>
        <?php require_once(CHEMIN_VUES . 'footer.php'); ?>
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
        <!-- Core theme JS-->
        <script src="<?= CHEMIN_SCRIPTS . 'scripts.js'; ?>"></script>
    </body>
</html>