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


    <?php elseif (
        $page_title == "Student" ||
        $page_title == "Settings" ||
        $page_title == "Teacher" ||
        $page_title == "Admin"
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
                    <ul class="navbar-nav text-center ms-auto">
                        <li class="nav-item dropdown text-primary fw-bold">
                            <button class="btn bg-transparent border-0 nav-link w-100" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-flex align-items-center" id="userNavbarDetails">
                                    <span>
                                        <img src="./assets/images/profile_pictures/default_profile_image.jpg" class="img-fluid mh-100 d-inline-block rounded-circle border border-2 border-primary m-1" style="height: 35px; width: 35px; object-fit:cover;">
                                    </span>
                                    <span class="text-start ms-2 text-primary">
                                        John Doe
                                        <small class="d-block text-muted tex-start p-0 m-0" style="font-size: 10px;">
                                            Mechanical Engineer
                                        </small>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu" style="z-index: 9999;">
                                <div class="d-flex justify-content-center align-items-center">
                                    <span class="icon-cog mx-2"></span>
                                    <a href="./student_settings.php" class="dropdown-item px-0">Settings</a>
                                </div>
                                <a href="./index.php" class="text-decoration-none">
                                    <button id="logoutButton" class="dropdown-item border-top" type="button" name="logoutButton">Log Out</button>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <?php endif; ?>