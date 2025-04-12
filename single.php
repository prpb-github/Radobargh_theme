  <?php get_header(); ?>
  <div class="container">
    <div class="d-flex">
      <p class="single-title rounded shadow"><?php echo '<h3>',the_title(),'</h3>'; ?></p>
    </div>
    <p class="body-text mt-5"><?php while(have_posts()):the_post();
    the_content(); endwhile;?></p>
  </div>
  <?php get_footer(); ?>