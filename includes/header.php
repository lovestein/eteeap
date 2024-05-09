<?php
session_start();
include('connection.php');
date_default_timezone_set('Asia/Manila');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/css/bootstrap.css">

    <!-- Custom -->
    <link rel="stylesheet" href="./assets/css/custom.css">

    <!-- Alertify -->
    <link rel="stylesheet" href="./assets/css/alertify.min.css">
    <link rel="stylesheet" href="./assets/css/alertify-bootstrap.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <title>PCU-ETEEAP | <?php echo $page_title ?></title>
</head>

<body>
    <?php if (
        $page_title == "Home" ||
        $page_title == "Overview" ||
        $page_title == "Announcement" ||
        $page_title == "About"
    ) : ?>

        <!-- Navbar with Login Button -->
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-fluid">
                <a href="./index.php" class="navbar-brand p-0">
                    <span class="row text-primary fw-bold fs-2 align-items-center p-0 m-0">
                        <span class="col d-inline-block p-0 d-flex">
                            <img src="./assets/images/web/pcu_logo.png" alt="" class="img-fluid d-inline-block" style="width: 55px;">
                        </span>
                        <span class="col d-inline-block ps-1">
                            PCU | ETEEAP
                        </span>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <!-- Navbar Links -->
                <div class="collapse navbar-collapse justify-content-center align-center" id="main-nav">
                    <ul class="navbar-nav text-center fw-bold fs-5 ms-auto">
                        <li class="nav-item px-3">
                            <a href="./overview.php" class="nav-link">Overview</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="./announcement.php" class="nav-link">Announcement</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="./about.php" class="nav-link">About</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav text-center ms-auto">
                        <li class="nav-item px-3 bg-primary rounded-3">
                            <a href="./login.php" class="nav-link fw-bold text-white">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    <?php else : ?>
       

    <?php endif; ?>