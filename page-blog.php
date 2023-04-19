<?= get_header();?>



<main class="container">

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
       <?= the_title();?> 
      </h3>


      <?php 
$args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="entry-content">

<p class="blog-post-meta"><?= the_date();?> <?= the_time();?> by <a href="<?= get_author_posts_url(get_the_author_meta("ID"));?>"><?= get_the_author_meta('nickname');?> </a></p>


<?php if (has_post_thumbnail()):?>

<div class="post-thumb">

    <?= the_post_thumbnail();?>

</div>

<?php endif;?>



<?php the_excerpt(); ?>
</div>
<?php endwhile;
wp_reset_postdata(); ?>
<?php else:  ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
      </nav>

    </div>

   

    <div class="col-md-4">
      
      <?php if(is_active_sidebar('sidebar')):?>


        <?php dynamic_sidebar('sidebar');?>

      <?php endif;?>


  </div>
  </div>

</main>

<?= get_footer();?>


