<?= get_header(); ?>



<main class="container">

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Latest Postssss
      </h3>



      <?php if (have_posts()): ?>

        <?php while (have_posts()):
          the_post(); ?>

          <article class="blog-post">
            <h2 class="blog-post-title mb-1">
              <a href="<?= the_permalink(); ?>"><?= the_title(); ?> </a>
            </h2>
            <p class="blog-post-meta">
              <?= the_date(); ?>
              <?= the_time(); ?>by<a href="<?= get_author_posts_url(get_the_author_meta("ID")); ?>"><?= get_the_author_meta('nickname'); ?> </a>
            </p>


            <?php if (has_post_thumbnail()): ?>

              <div class="post-thumb">

                <?= the_post_thumbnail(); ?>

              </div>

            <?php endif; ?>


            <p>
              <?= the_content(); ?>
            </p>
            <hr>

            <?php comments_template(); ?>



          </article>

        <?php endwhile; ?>

      <?php else: ?>



        <p>
          <?php __("No Post Found."); ?>
        </p>


      <?php endif; ?>


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
      </nav>

    </div>



    <div class="col-md-4">

      <?php if (is_active_sidebar('sidebar')): ?>


        <?php dynamic_sidebar('sidebar'); ?>

      <?php endif; ?>


    </div>
  </div>

</main>

<?= get_footer(); ?>