<?= get_header(); ?>


<main class="container">

  <div class="row g-5">
    <div class="col-md-8">




      <?php if (have_posts()): ?>

        <?php while (have_posts()):
          the_post(); ?>

          <article class="blog-post">
            <h2 class="blog-post-title mb-1">
              <?= the_title(); ?> </a>
            </h2>


            <p>
              <?= the_content(); ?>
            </p>
            <hr>

          </article>

        <?php endwhile; ?>

      <?php else: ?>


        <p>
          <?php __("No Page Found."); ?>
        </p>


      <?php endif; ?>


    </div>




    <div class="col-md-4">

      <?php if (is_active_sidebar('sidebar')): ?>


        <?php dynamic_sidebar('sidebar'); ?>

      <?php endif; ?>


    </div>
  </div>

</main>

<?= get_footer(); ?>