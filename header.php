<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class=" position-relative p-2 p-md-0 ">
        <nav class="navbar navbar-expand-lg justify-content-center  pt-4 ">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/header-img1.png" alt="header image background left" class="bg-img-postion-left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/header-img2.png" alt="header image background right" class="bg-img-postion-right">
            <div class=" wrapper  d-flex justify-content-between align-content-center w-100  ">
                <div class="d-flex flex-column align-items-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Logo.png" alt="Logo">
                    <p class="logo-text m-1  custom-blue fs-2 fw-bold" >ŚWIATY ŁOPATY</p>
                </div>
                <div class="d-flex flex-column  justify-content-center align-items-end   position-relative w-100  " id="navbarNavDropdown">
                    <div class="flex justify-content-end gap-3  position-absolute top-0 end-0 me-sm-3 ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/tiktok.png" alt="tiktok icon" class="cursor-pointer" >
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.png" alt="instagram icon" class="cursor-pointer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="facebook icon" class="cursor-pointer">
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/hamburger.svg" alt="hamburger menu" id="ham-menu-icon" class="ham-menu d-lg-none ">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/close.svg" alt="Close menu" id="close-menu-icon" class="ham-menu-close   d-lg-none d-none">
                    <ul class="navbar-nav d-lg-flex justify-content-center flex-wrap   gap-5 d-none  ">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link-look" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            O NAS
                        </a>
                        <ul class="dropdown-menu menu-look  ">
                            <li class="drop-down-listed-item"><a href="#">NASZ TEAM</li>
                            <li class="drop-down-listed-item"><a href="#">NASZE KATAMARANY</a></li>
                            <li class="drop-down-listed-item"><a href="#">MY W MEDIACH</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  nav-link-look" aria-current="page" href="#">REJSY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look" href="#">OPIS TRAS </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look" href="#">CZARTERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look" href="#">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look" href="#">KONTAKT</a>
                        </li>
                        <button class="custom-btn ">ZNAJDZ REJS DLA SIEBIE</button>
                    </ul>
                    <ul class="navbar-nav d-lg-none justify-content-center align-items-center flex-wrap d-none gap-1 position-absolute end-0 top-0 ham-menu-look z-2" id="mobile-nav-menu">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link-look-menu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            O NAS
                        </a>
                        <ul class="dropdown-menu menu-look  ">
                            <li class="drop-down-listed-item"><a href="#">NASZ TEAM</li>
                            <li class="drop-down-listed-item"><a href="#">NASZE KATAMARANY</a></li>
                            <li class="drop-down-listed-item"><a href="#">MY W MEDIACH</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  nav-link-look-menu" aria-current="page" href="#">REJSY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look-menu " href="#">OPIS TRAS </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look-menu " href="#">CZARTERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look-menu " href="#">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look-menu " href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-look-menu " href="#">KONTAKT</a>
                        </li>
                        <button class="custom-btn mb-4">ZNAJDZ REJS DLA SIEBIE</button>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
