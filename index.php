﻿<?php get_header();  echo  get_post_format(); ?>

  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

    <?php endwhile; else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>
  </div>
  
<?php get_footer(); ?>