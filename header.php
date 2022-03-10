<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- <link rel="stylesheet" href="./assets/css/style.min.css"> -->
    <title>Document</title>
</head>

<body>

    <header class="header" id="#home">
        <div class="container">
            <div class="header__top" id="go-top">
<!-- navigation -->
                <div class="header__navigation">
                    <nav class="header__menu menu">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a class="menu-link" href="#home">Home</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu-link" href="#shop">Shop</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu-link" href="#story">Story</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu-link" href="#about">About</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu-link" href="#blog">Blog</a>
                            </li>
                            <li class="menu__item">
                                <a class="menu-link" href="#testimonials">Testimonials</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__right-block">
                        <div class="header__personal personal">
                            <ul class="personal__list">
                                <li class="personal__list-item">
                                    <a class="personal__link" href=" ">
                                        <img class="personal__img" src="<?php echo IMG_DIR; ?>/header/Search-icon.png " alt="icon">
                                    </a>
                                </li>
                                <li class="personal__list-item">
                                    <a class="personal__link" href=" ">
                                        <img class="personal__img" src="<?php echo IMG_DIR; ?>/header/User-icon.png " alt="icon">
                                    </a>
                                </li>
                                <li class="personal__list-item">
                                    <a class="personal__link" href=" ">
                                        <img class="personal__img" src=" <?php echo IMG_DIR; ?>/header/Cart-icon.png" alt="icon">
                                        <span class="personal__counter">0</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="header__social social">
                            <ul class="social__list">
                                <li class="social__list-item">
                                    <a class="social__link" href=" ">
                                        <img class="social__img" src="<?php echo IMG_DIR; ?>/header/Facebook-icon.png " alt="fb">
                                    </a>
                                </li>
                                <li class="social__list-item">
                                    <a class="social__link" href=" ">
                                        <img class="social__img" src="<?php echo IMG_DIR; ?>/header/Pinterest-icon.png " alt="pinterest">
                                    </a>
                                </li>
                                <li class="social__list-item">
                                    <a class="social__link" href=" ">
                                        <img class="social__img" src="<?php echo IMG_DIR; ?>/header/Instagram-icon.png " alt="insta">

                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="header__logo logo">
                    <a class="logo__link" href=" ">
                        <img class="logo__img" src="<?php echo IMG_DIR; ?>/header/Logo.png" alt="org">
                    </a>
                </div>


            </div>
<!--кнопка бургер  -->
            <button class="header__burger-btn" id="header__burger-btn">
                <img class="header__burger-btn-icon" id="header__burger-btn-icon" src="<?php echo IMG_DIR; ?>/header/menu.svg" alt="">
            </button>


<!-- бургер меню -->
<div class="header__burger burger" id="header__burger">
<!-- 1block -->
    <nav class="burger__menu menu" id="burger__menu">
        <ul class="menu__list burger__list">
            <li class="menu__item burger__item">
                <a class="menu-link" href="#home">Home</a>
            </li>
            <li class="menu__item burger__item">
                <a class="menu-link" href="#shop">Shop</a>
            </li>
            <li class="menu__item burger__item">
                <a class="menu-link" href="#story">Story</a>
            </li>
            <li class="menu__item burger__item">
                <a class="menu-link" href="#about">About</a>
            </li>
            <li class="menu__item burger__item">
                <a class="menu-link" href="#blog">Blog</a>
            </li>
            <li class="menu__item burger__item">
                <a class="menu-link" href="#testimonials">testimonials</a>
            </li>
        </ul>
    </nav>
<!-- 2block -->
    <div class="header__right-block burger__right-block">
        <div class="header__personal burger__personal personal">
            <ul class="personal__list">
                <li class="personal__list-item">
                    <a class="personal__link" href=" ">
                        <img class="personal__img" src="<?php echo IMG_DIR; ?>/header/Search-icon.png " alt="icon">
                    </a>
                </li>
                <li class="personal__list-item">
                    <a class="personal__link" href=" ">
                        <img class="personal__img" src="<?php echo IMG_DIR; ?>/header/User-icon.png " alt="icon">
                    </a>
                </li>
                <li class="personal__list-item">
                    <a class="personal__link" href=" ">
                        <img class="personal__img" src=" <?php echo IMG_DIR; ?>/header/Cart-icon.png" alt="icon">
                        <span class="personal__counter">0</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="header__social social">
            <ul class="social__list">
                <li class="social__list-item">
                    <a class="social__link" href=" ">
                        <img class="social__img" src="<?php echo IMG_DIR; ?>/header/Facebook-icon.png " alt="fb">
                    </a>
                </li>
                <li class="social__list-item">
                    <a class="social__link" href=" ">
                        <img class="social__img" src="<?php echo IMG_DIR; ?>/header/Pinterest-icon.png " alt="pinterest">
                    </a>
                </li>
                <li class="social__list-item">
                    <a class="social__link" href=" ">
                        <img class="social__img" src="<?php echo IMG_DIR; ?>/header/Instagram-icon.png " alt="insta">

                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>


            <div class="header__content"><button class="wow animated fadeInLeftBig header__btn btn btn--green">Shop Now</button>
            </div>
            <h1 class="tracking-in-contract-bck header-heading">Smoothies</h1>
        </div>
    </header>