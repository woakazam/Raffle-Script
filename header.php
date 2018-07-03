<?php require ('global/initialize.php'); ?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <title>Woa Raffle Script</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <?php foreach ($CDN['CSS'] as $index => $value){ ?>

        <link rel="stylesheet" href="<?php echo $value; ?>">
        <?php } ?>

        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="shortcut icon" href="assets/img/icon.png">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/icon.png" width="32" height="32" class="d-inline-block align-top" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Ana Sayfa</a>
                    </li>
                </ul>
            </div>
        </nav>