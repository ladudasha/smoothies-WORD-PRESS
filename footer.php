<!-- FOOTER -->
<section class="footer">
        <div class="container">
            <div class="footer__content">

                <div class="footer__logo logo">
                    <a class="logo__link " href=" ">
                        <img class="logo__img" src="<?php echo IMG_DIR; ?>/header/Logo.png" alt="org ">
                    </a>
                </div>

                <div class="footer__info ">
                    <h4 class="footer__info_heading">Information</h4>
                    <ul class="footer__info_list">

                        <li class="footer__info_item">
                            <a class="footer__info_link" href="">Search</a>
                        </li>

                        <li class="footer__info_item">
                            <a class="footer__info_link" href="">Contact us</a>
                        </li>

                        <li class="footer__info_item">
                            <a class="footer__info_link" href="">Terms & Conditions</a>
                        </li>

                        <li class="footer__info_item">
                            <a class="footer__info_link" href="">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="footer__pay ">
                    <h4 class="footer__pay-heading">Payment</h4>
                    <ul class="footer__pay-list">

                        <li class="footer__pay-item">
                            <img class="footer__pay-img" src="<?php echo IMG_DIR; ?>/footer/AMEX.png" alt="AMEX">
                        </li>

                        <li class="footer__pay-item">
                            <img class="footer__pay_img" src="<?php echo IMG_DIR; ?>/footer/Apple Pay.png" alt="Apple Pay">
                        </li>

                        <li class="footer__pay-item">
                            <img class="footer__pay-img" src="<?php echo IMG_DIR; ?>/footer/Maestro.png" alt="Maestro">
                        </li>

                        <li class="footer__pay-item">
                            <img class="footer__pay-img" src="<?php echo IMG_DIR; ?>/footer/Discover.png" alt="Discover">
                        </li>

                        <li class="footer__pay-item">
                            <img class="footer__pay-img" src="<?php echo IMG_DIR; ?>/footer/JCB.png" alt="JCB">
                        </li>

                        <li class="footer__pay-item">
                            <img class="footer__pay-img" src="<?php echo IMG_DIR; ?>/footer/Mastercard.png" alt="Mastercard">
                        </li>

                        <li class="footer__pay-item">
                            <img class="footer__pay-img" src="<?php echo IMG_DIR; ?>/footer/Paypal.png" alt="Paypal">
                        </li>

                        <li class="footer__pay-item">
                            <img class="footer__pay-img" src="<?php echo IMG_DIR; ?>/footer/Shopify Pay.png" alt="Shopify Pay">
                        </li>

                        <li class="footer__pay-item">
                            <img class="footer__pay-img" src="<?php echo IMG_DIR; ?>/footer/Visa.png" alt="Visa">
                        </li>
                    </ul>
                </div>

                <div class="footer__block ">

                    <h4 class="footer__block-heading">Don’t miss out!</h4>
                    <form class="footer__block-form" action="#">
                        <input class="footer__block-input" type="text" placeholder="Subscribe to our newsletter" name="text">
                        <input type="hidden" class="footer__form-btn"></input>
                    </form>
                    <div class="footer__box-small">
                        <button class=" footer__follow-us"> follow us </button>
                        <div class="footer__social">
                            <ul class="footer__social-list">

                                <li class="footer__social-item">
                                    <a class="footer__social-link" href=" ">
                                        <img class="footer__social-img" src="<?php echo IMG_DIR; ?>/footer/Facebook.png " alt="fb">
                                    </a>
                                </li>

                                <li class="footer__social-item">
                                    <a class="footer__social-link" href=" ">
                                        <img class="footer__social-img" src="<?php echo IMG_DIR; ?>/footer/Pinterest.png " alt="ptr">
                                    </a>
                                </li>

                                <li class="footer__social-item">
                                    <a class="footer__social-link" href=" ">
                                        <img class="footer__social-img" src="<?php echo IMG_DIR; ?>/footer/Instagram.png " alt="insta">
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>


        </div>
        <div class="footer__row">
            <small class="footer__center-text">© 2020. All Rights Reserved.
            </small>
            <a class="footer__btn-top" id="footer__btn-top" href="#go-top"></a>
        </div>

    </section>

    <?php wp_footer(); ?>

    <!-- <script src="./assets/js/vanilla-tilt.js"></script>
    <script src="./assets/js/script.js"></script> -->
    <script>
        new WOW().init();
    </script>
    

</body>

</html>