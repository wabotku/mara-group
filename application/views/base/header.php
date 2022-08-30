<html lang="en">

<head>
    <title>Mara Group</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Donegal+One&display=swap" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/slick/slick.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/slick/slick-theme.css'); ?>" />
    <!-- Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/footer-2.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/balemara.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <!-- My css  -->
    <style>
        .navbar {
            background-color: #B59A87;
        }
        
        @media (max-width: 768px) {
            #dual-collapse2 {
                text-align: center;
            }
        }
    </style>

</head>

<body style="overflow-x: hidden;">

    <div class="wrapper" style="overflow-x: hidden;">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#dual-collapse2" aria-controls="dual-collapse2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse w-100 order-1 order-md-0 head-1" id="dual-collapse2">
                    <ul class="navbar-nav me-auto" style="margin-left: 0px;">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?=base_url('main')?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?= base_url('main/balemara'); ?>">Balemara</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link text-white" href="<?= base_url('main/kutamara'); ?>">Kutamara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="rumamara.html">Rumamara</a>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0">
                    <a class="navbar-brand justify-content-center" href="#">
                        <img src="<?= base_url('assets/resources/Logo/balemara/Balemara.png'); ?>" width="200" height="70" alt="">
                    </a>
                </div>
                <div class="navbar-collapse collapse w-100 order-3" id="dual-collapse2">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="kaingara.html">Kaingara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="sudut-lenggah.html">Sudut Lenggah</a>
                        </li>
                        <li class="nav-item">
                            <a href="naira.html" class="nav-link text-white">Naira</a>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="nav-item">
                            <a href="#contact" type="button" class="btn btn-outline-light">&nbsp&nbsp&nbsp&nbsp&nbsp Contact
                                &nbsp&nbsp&nbsp&nbsp&nbsp</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- Akhir Navbar -->
