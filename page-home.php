<?php get_header(); ?>



<main>

    <div class="container-fluid">
        <div class="container-wrap">
            <div class="row">
                <div class="col">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="image-img">
                                    <img src="<?= bloginfo('template_url'); ?>/image/bg4.jpg" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-img">
                                    <img src="<?= bloginfo('template_url'); ?>/image/bg2.jpg" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="image-img">
                                    <img src="<?= bloginfo('template_url'); ?>/image/b1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="overlayy">
        <img src="<?= bloginfo('template_url'); ?>/image/overlay-bottom.png" alt="">
    </div>
    <section>

        <div class="container">


            <?= the_content(); ?>

        </div>

    </section>


</main>





<!-- 
<?php if (has_post_thumbnail()) : ?>

<div class="post-thumb">

      <?= the_post_thumbnail(); ?>

</div>

<?php endif; ?> -->






<?php get_footer(); ?>