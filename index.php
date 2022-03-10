
<?php get_header(); ?>
<!-- SMOOTHIES -->
    <section class="smoothies" id="shop">
        <div class="container">

            <h2 data-wow-offset="500" class="wow animated flipInX  smoothies__title title">What are these smoothies?</h2>
            <p class="smoothies__text text">A smoothie is a drink made from pureed raw fruit, vegetables, and sometimes dairy products (milk, yogurt, ice-cream or cottage cheese), typically using a blender. Smoothies may be made using other ingredients, such as water, crushed ice, fruit
                juice, sweeteners (e.g. honey, sugar, stevia, or syrup), whey powder, plant milk, nuts, nut butter, seeds, tea, chocolate, herbal supplements, or nutritional supplements.</p>

            <div class="smoothies__wrapper">
                <div class="smoothies__card">
                    <img class="smoothies__img" src="<?php echo IMG_DIR; ?>/smoothies/Icon1.png " alt="plant">
                    <h3 class="smoothies__heading">Plant Based</h3>
                </div>
                <div class="smoothies__card">
                    <img class="smoothies__img" src="<?php echo IMG_DIR; ?>/smoothies/Icon2.png " alt="vegan">
                    <h3 class="smoothies__heading">Vegan</h3>
                </div>
                <div class="smoothies__card">
                    <img class="smoothies__img" src="<?php echo IMG_DIR; ?>/smoothies/Icon3.png " alt="paleo">
                    <h3 class="smoothies__heading">Paleo</h3>
                </div>
                <div class="smoothies__card">
                    <img class="smoothies__img" src="<?php echo IMG_DIR; ?>/smoothies/Icon4.png " alt="gluten-Free">
                    <h3 class="smoothies__heading">Gluten-Free</h3>
                </div>
                <div class="smoothies__card">
                    <img class="smoothies__img" src="<?php echo IMG_DIR; ?>/smoothies/Icon5.png " alt="Corn-Free">
                    <h3 class="smoothies__heading">Corn-Free</h3>
                </div>
                <div class="smoothies__card">
                    <img class="smoothies__img" src="<?php echo IMG_DIR; ?>/smoothies/Icon6.png " alt="Soy-Free">
                    <h3 class="smoothies__heading">Soy-Free</h3>
                </div>
                <div class="smoothies__card">
                    <img class="smoothies__img" src="<?php echo IMG_DIR; ?>/smoothies/Icon7.png " alt="Ayurvedic">
                    <h3 class="smoothies__heading">Ayurvedic</h3>
                </div>
                <div class="smoothies__card">
                    <img class="smoothies__img" src="<?php echo IMG_DIR; ?>/smoothies/Icon8.png " alt="Love">
                    <h3 class="smoothies__heading">Made With Love</h3>
                </div>
            </div>
        </div>
    </section>
<!-- ABOUT -->
    <section class="about" id="about">
        <div class="container">
            <div class="about__wrapper">

                <img class="about__img " data-tilt src="<?php echo IMG_DIR; ?>/about/about.png" alt="bottles">

                <div class="about__text">
                    <h2 class="about__title title">What makes Smoothie an <span class="about__title-green">awesome
                            drink?</span> </h2>
                    <ul class="about__list">
                        <li class="about-item"><span class="about__text--bold">Crunchy Puffs</span> Texture</li>
                        <li class="about-item"><span class="about__text--bold"> 100 Calories</span> per drink</li>
                        <li class="about-item">4g Plant Protein</li>
                        <li class="about-item">Good source of <span class="about__text--bold"> Magnesium & Vitamin
                                B6</span></li>
                        <li class="about-item"><span class="about__text--bold"> No Sugar</span> in our Savory Flavors
                        </li>
                        <li class="about-item"><span class="about__text--bold"> Non-GMO, Vegan & Paleo</span></li>
                        <li class="about-item"><span class="about__text--bold"> Gluten-Free & Grain-Free</span></li>
                        <li class="about-item"><span class="about__text--bold"> Corn-Free & Soy-Free</span></li>
                    </ul>
                    <a class="about__btn btn btn--green" href="#">About Organic Smoothie</a>
                </div>
            </div>
        </div>
    </section>
<!-- PRODUCTS -->
    <section class="products" >
        <div class="products__wrapper">
            <div class="products__box products__box--red ">
                <img class="products__img" src="<?php echo IMG_DIR; ?>/products/Img1.png" alt="bottlebrown">
                <h3 data-wow-offset="400" class="wow animated pulse products__heading">Dark Chocolate Smoothie<br><i class="products__italik">100 ml</i> </h3>
                <a class="products__btn btn btn--white" href="#">Buy</a>
            </div>

            <div class="products__box products__box--green">
                <img class="products__img" src="<?php echo IMG_DIR; ?>/products/Imggreen.png" alt="bottlegreen">
                <h3 data-wow-offset="400" class="wow animated pulse products__heading">Vegan Lettuce Smoothie<br><i class="products__italik">100 ml</i> </h3>
                <a class="products__btn btn btn--white" href="#">Buy</a>
            </div>

            <div class="products__box products__box--yellow">
                <img class="products__img" src="<?php echo IMG_DIR; ?>/products/Imglemon.png" alt="bottleyellow">
                <h3 data-wow-offset="400" class="wow animated pulse products__heading">Lemon Ginger Smoothie<br><i class="products__italik">100 ml</i> </h3>
                <a class="products__btn btn btn--white" href="#">Buy</a>
            </div>

            <div class="products__box products__box--orange">
                <img class="products__img" src="<?php echo IMG_DIR; ?>/products/Imgred.png" alt="bottlered">
                <h3 data-wow-offset="400" class="wow animated pulse products__heading">Turmeric Garlic Smoothie<br><i class="products__italik">100 ml</i> </h3>
                <a class="products__btn btn btn--white" href="#">Buy</a>
            </div>
        </div>
    </section>
<!-- STORY -->
    <section class="story" id="story">
        <div class="container">
            <div class="story__wrapper">
                <div class="story__content ">
                    <h2 class="story__title title">Our story</h2>
                    <p class="story__text text">As products typically using raw fruits or vegetables, smoothies include dietary fiber (e.g. pulp, skin, and seeds) and so are thicker than fruit juice, often with a consistency similar to a milkshake. </p>
                    <a class="story__btn btn btn--green" href="">Who we are</a>
                </div>

                <div class="story__pic">
                    <img class="story__img" src="<?php echo IMG_DIR; ?>/story/Img.jpg" alt="coctail">
                </div>
            </div>
        </div>
    </section>
<!-- TESTIMONIALS -->
    <section class="testimonials" id="testimonials">

        <h2 data-wow-offset="400" class="wow animated fadeInDown testimonials__title title ">Why clients <span class="testimonials__love">LOVE</span> us?</h2>

        <article class="testimonials__excerpt">
            <div class="testimonials__wrap">
                <blockquote class="testimonials__blockquote">Smoothie is great. I don't know what else to say. I will let my mum know about this, she could really make use of Smoothie! Smoothie saved my business.
                </blockquote>
                <cite class="testimonials__santa">from Santa Monica, CA</cite>
            </div>
            <img class="testimonials__avatar" src="<?php echo IMG_DIR; ?>/testimonials/Img.png" alt="women">

        </article>

        <div class="testimonials__controls">
            <button class="testimonials__arrow testimonials__arrow--left"></button>
            <button class="testimonials__arrow"></button>
        </div>
    </section>
<!-- BLOG -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="blog__wrapp">
                <div data-wow-offset="300" class="wow animated fadeInLeftBig blog__box">
                    <h2 class="blog__title title">Our blog</h2>
                    <img class=" blog__img" src="<?php echo IMG_DIR; ?>/blog/Img.jpg" alt="pudding">
                </div>

                <div data-wow-offset="300" class="wow animated fadeInRightBig blog__content">
                    <h3 class="blog__heading">ASAFOETIDA - THE NEXT TURMERIC?</h3>
                    <time class="blog__date" datetime="2020-06-16">Jun 16, 2020</time>
                    <p class="blog__text text">
                        If the fruit ingredients and the green vegetable ingredients are both juiced ahead of time, the mixed juice doesn't even have to be blended like a smoothie, i.e. a green juice or anything...
                        <strong><a class="blog__arrow" href="">Read More</a></strong>
                    </p>
                </div>
            </div>
        </div>
    </section>
<!-- INSTAGRAM -->
    <section class="instagram">
        <h2 class=" instagram__title title">
            <a class=" instagram__link" href="">ashasuperfoods</a></h2>

        <div class="instagram__wrapper">

            <div class="instagram__card">
                <img class="instagram__img" src="<?php echo IMG_DIR; ?>/instagram/Img1.jpg" alt="smoothie1">
            </div>

            <div class="instagram__card">
                <img class="instagram__img" src="<?php echo IMG_DIR; ?>/instagram/Img2.jpg" alt="smoothie2">
            </div>

            <div class="instagram__card">
                <img class="instagram__img" src="<?php echo IMG_DIR; ?>/instagram/Img3.jpg" alt="smoothie3">
            </div>

            <div class="instagram__card">
                <img class="instagram__img" src="<?php echo IMG_DIR; ?>/instagram/Img4.jpg" alt="smoothie4">
            </div>

            <div class="instagram__card">
                <img class="instagram__img" src="<?php echo IMG_DIR; ?>/instagram/Img5.jpg" alt="smoothie5">
            </div>

        </div>

    </section>

    <?php get_footer(); ?>